<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------
namespace app\portal\controller;

use cmf\controller\HomeBaseController;
use app\portal\model\PortalCategoryModel;
use app\portal\service\ApiService;
use think\db\Query;

class ListController extends HomeBaseController
{
    /***
     * 文章列表
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index()
    {
        $id                  = $this->request->param('id', 0, 'intval');
        $portalCategoryModel = new PortalCategoryModel();

        $category = $portalCategoryModel->where('id', $id)->where('status', 1)->find();
       //trace($category->toArray());
        $this->assign('category', $category);

        $listTpl = empty($category['list_tpl']) ? 'list' : $category['list_tpl'];

        return $this->fetch('/' . $listTpl);
    }

    //获取文章列表
    public function getArticleList(){
        if(request()->isAjax()){
            $pageNumber = input('pageNumber');  //当前是第几页
            $categoryId = input('categoryId');      //文章分类
            $pageSize = input('pageSize',5);  //分页大小
            $navid = input('navid','');             //导航的分类id
            $result =  ApiService::articles([
                'field'=>'post.post_excerpt as description,post.id as id,post.post_content as body,
                        post.thumbnail as imageUrl,post.post_title as title,post.create_time as createdAt,post.post_source as author',
                'page'=>['list_rows'=>$pageSize,'page'=>$pageNumber],  //list_rows 每页数量 ,page 当前页
                'category_ids'=>$categoryId,
                'order'=>'post.create_time DESC']);
            foreach($result['articles'] as &$val){
                $val['accessUrl'] = cmf_url('portal/Article/index',array('id'=>$val['id'],'cid'=>$categoryId)) .'?categoryId='. $navid;
            }
            $this->success('文章列表数据返回成功',null,[
                'page'=>[
                    'list'=>$result['articles'],
                    'isLastPage'=> $pageNumber == $result['total_pages'],
                    'nextPage'=> ++$pageNumber,
                    'total'=>$result['total'],
                    'pageNum'=>$pageNumber,
                    'pageSize'=>$pageSize
                ]
            ]);
        }

    }

}
