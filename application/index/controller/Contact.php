<?php

namespace app\index\controller;

use think\Request;
use app\index\model\Message as MessageModel;
use app\index\validate\Message as MessageValidate;

/**
 * 前台联系我们控制器
 * @package app\index\controller
 */
class Contact extends Home
{
    //联系我们
    public function index(){
        return view();
    }
    //在线留言
    public function message(){
        return view();
    }

    //新增在线留言处理
    public function insert_message(Request $request){
        if($request->isPost()) {
            $param = $request->post();
            // 验证
            $validate = new MessageValidate();
            if(!$validate->check($param)){
                return ['code'=>0,'msg'=>$validate->getError()];
            }else{
                // 添加数据
                $param['where_ip'] = ip2long($_SERVER["REMOTE_ADDR"]);
                if(MessageModel::create($param)){
                    return json(['code'=>1,'msg'=>'提交成功']);
                }else{
                    return  json(['code'=>0,'msg'=>'提交失败']);
                }
            }
        }
    }
}
