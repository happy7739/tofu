<?php

namespace app\index\controller;

use app\admin\model\News as NewsModel;


/**
 * 前台公司文化控制器
 * @package app\index\controller
 */
class Brand extends Home
{
    //品牌简介
    public function index(){
        return view();
    }
    //品牌文化
    public function culture(){
        return view();
    }
    //品牌风采
    public function style(){
        return view();
    }
    //品牌动态
    public function news()
    {
        $data = NewsModel::where(['status' => 1])
            ->field(['id', 'title', 'desc', 'img'])
            ->order(['id'=>'desc', 'sort'])
            ->paginate(6);
        $render = $data->render();
        return view('', [
            'data' => $data,
            'render' => $render,
        ]);
    }
    //品牌动态
    public function details($id)
    {
        $details = NewsModel::where(['id'=>$id])
            ->field(['id','title','time','content'])
            ->find();
        //上一页数据
        $up = NewsModel::where([
            ['id','<',$id],
        ])
            ->order(['id'=>'desc', 'sort'])
            ->field(['id','title'])
            ->find();
        if(empty($up)){
            $up = array(
                'id'    => $id,
                'title' => '没有上一篇了'
            );
        }
        //下一页数据
        $lo = NewsModel::where([
            ['id','>',$id],
        ])
            ->order(['id'=>'desc', 'sort'])
            ->field(['id','title'])
            ->find();
        if(empty($lo)){
            $lo = array(
                'id'    => $id,
                'title' => '没有下一篇了'
            );
        }
        $this->assign(
            [
                'details'  => $details,
                'up'       => $up,
                'lo'       => $lo,
            ]
        );
        /*$data = NewsModel::where(['status' => 1])
            ->field(['id', 'title', 'desc', 'img', 'time', 'content'])
            ->order(['id'=>'desc', 'sort'])
            ->find();*/
        return view('',[
            'title' => '动态详情'
        ]);
    }

}
