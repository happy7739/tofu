<?php

namespace app\index\controller;

use app\admin\model\Product as ProductModel;
use app\admin\model\Banner as BannerModel;
use app\admin\model\Store as StoreModel;
use app\admin\model\News as NewsModel;

/**
 * 前台首页控制器
 * @package app\index\controller
 */
class Index extends Home
{
    public function index(){
        $product = ProductModel::where(['is_tui'=>1])
            ->field(['id','title','desc','img'])
            ->order(['id','sort'])
            ->limit(4)
            ->select();
        $banner = BannerModel::where(['status'=>1])
            ->field(['id','img','alt','title'])
            ->order(['sort'])
            ->select();
        $store = StoreModel::where(['is_tui'=>1])
            ->field(['id','title','desc','img'])
            ->order(['id','sort'])
            ->limit(20)
            ->select();
        $news = NewsModel::where(['is_tui'=>1])
            ->field(['id','title','desc','img','time'])
            ->order(['id','sort'])
            ->limit(12)
            ->select();
        return view('',[
            'product'   => $product,
            'banner'    => $banner,
            'store'     => $store,
            'news'      => $news,
            ]);
    }

    public function index_bat(){
        $product = ProductModel::where(['is_tui'=>1])
            ->field(['id','title','desc','img'])
            ->order(['id','sort'])
            ->limit(4)
            ->select();
        $banner = BannerModel::where(['status'=>1])
            ->field(['id','img','alt','title'])
            ->order(['sort'])
            ->select();
        $store = StoreModel::where(['is_tui'=>1])
            ->field(['id','title','desc','img'])
            ->order(['id','sort'])
            ->limit(20)
            ->select();
        $news = NewsModel::where(['is_tui'=>1])
            ->field(['id','title','desc','img','time'])
            ->order(['id','sort'])
            ->limit(12)
            ->select();
        return view('',[
            'product'   => $product,
            'banner'    => $banner,
            'store'     => $store,
            'news'      => $news,
        ]);
    }
}
