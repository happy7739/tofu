<?php

namespace app\index\controller;

use app\admin\model\Store as StoreModel;

/**
 * 前台成功案例控制器
 * @package app\index\controller
 */
class Stories extends Home
{
    //效果图
    public function index(){
        $param = request()->param();
        //分类
        $is_cat = array_key_exists('cat', $param);
        if($is_cat == true) {
            $cat = $param['cat'];
        }else{
            $cat = 1;
        };
        //第几页
        $is_page = array_key_exists('page', $param);
        if($is_page == true){
            $page = $param['page'];
        }else{
            $page = 1;
        }
        $config = array(
            'page'     => $page,
            'query'    => ['cat'=>$cat],
        );
        $data = StoreModel::where(['pid'=>$cat,'status'=>1])
            ->field(['id','title','desc','img'])
            ->order(['id','sort'])
            ->paginate(6,false,$config);
        $render = $data->render();
        /* $this->assign(
             [
                 'data'      => $data,
                 'render'    => $render,
             ]
         );*/
        return view('',[
            'cat'       => $cat,
            'data'      => $data,
            'render'    => $render,
        ]);
    }
    //实体店
    public function store(){
        return view();
    }
    //加盟商
    public function franchisee(){
        return view();
    }
}
