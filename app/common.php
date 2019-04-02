<?php
/**
 * Created by PhpStorm.
 * User: wk
 * Date: 2019/3/7
 * Time: 22:48
 */
use app\admin\model\NavMenuModel;
use app\admin\model\SlideModel;
use app\admin\model\SlideItemModel;
use tree\Tree;
use app\portal\service\ApiService;
use app\portal\model\PortalPostModel;

//注意全局函数污染问题
//获取导航数据
function getNav(){
    $navMenuModel = new NavMenuModel();
    $result = $navMenuModel->where('status',1)->order('list_order')->select();
    if(!empty($result)){
        $nav = $result->toArray();
        $tree       = new Tree();
        $tree->init($nav);
        return $tree->getTreeArray(0);
    } else {
        return [];
    }

}

//获取幻灯片数据
function getSlide($slide_id){
    $slideItem = new SlideItemModel();
    $slides1         = $slideItem->where('slide_id',$slide_id)->select();
    return $slides1?$slides1->toArray():[];

}

//返回子集菜单若无子集则返回同级
function getSubNav($id){
    $navMenuModel = new NavMenuModel();
    $result = $navMenuModel
        ->where(['status'=>1,'parent_id'=>$id])
        ->order('list_order')
        ->select();
    if(!$result->isEmpty()){
        return $result->toArray();
    } else {
        $pid = $navMenuModel->where('id',$id)->value('parent_id');
        if(!empty($pid)){

            $result = $navMenuModel
                ->where(['parent_id'=>$pid])
                ->order('list_order')
                ->select();
            return !$result->isEmpty()?$result->toArray():[];
        }
        return [];
    }

}

//获取面包屑标题（传入导航id有下级则返回本身，否则返回父级导航名称）
function getBreadTitle($id){
    $navMenuModel = new NavMenuModel();
    $count = $navMenuModel
        ->where(['parent_id'=>$id])
        ->count();
    $result = '';
    if($count > 0){
        $result =  $navMenuModel->where('id',$id)->value('name');
    } else {
        $pid = $navMenuModel->where('id',$id)->value('parent_id');
        if(!empty($pid)){
            $result = $navMenuModel
                ->where(['id'=>$pid])
                ->value('name');
        }
    }
    return $result;

}


//处理顶部导航菜单的url
function handleNavUrl($url){
    if(preg_match("/^\{.*\}$/",$url)){
        $obj = json_decode($url,true);
        return url($obj['action'],$obj['param']);

    } else {
        return $url == 'home'?'/' : $url;
    }
}

//获取文章列表
function getArticlesList($param){
    return ApiService::articles($param);
}


//判断2个分类id是否是父子关系
function isSubCategory($father_id,$sub_id){
    static  $category;
    if(empty($category)){
        //trace('test');
        $category = db('nav_menu')->column('id,nav_id,parent_id');
    }

    $parents = _isSubCategory($category,$sub_id);

    if(in_array($father_id,$parents)){
        return true;
    }
    return false;

}


function _isSubCategory($category,$sub_id){
    $result = [];
    $parent_id = $category[$sub_id]['parent_id'];

    if(isset($category[$parent_id])){
        array_push($result,$parent_id);
        $result = array_merge($result,_isSubCategory($category,$parent_id));
    }
    return $result;
}


//获取文章的数量
function getArticlescount($param){
    $param = array_merge($param,['page'=>1]);
    $result  =ApiService::articles($param);
    //trace($result['total']);
    return $result['total'];
}
