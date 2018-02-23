<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2018/1/9
 * Time: 下午1:04
 */

namespace EasySwoole;

use \EasySwoole\Core\AbstractInterface\EventInterface;
use \EasySwoole\Core\Swoole\ServerManager;
use \EasySwoole\Core\Swoole\EventRegister;
use \EasySwoole\Core\Http\Request;
use \EasySwoole\Core\Http\Response;

Class EasySwooleEvent implements EventInterface
{

    public function frameInitialize(): void
    {
        // TODO: Implement frameInitialize() method.
        date_default_timezone_set('Asia/Shanghai');
    }

    public function mainServerCreate(ServerManager $server, EventRegister $register): void
    {
        // TODO: Implement mainServerCreate() method.

        $register->add($register::onMessage, function (\swoole_websocket_server $server, \swoole_websocket_frame $frame) {

        });

    }

    public function onRequest(Request $request, Response $response): void
    {
        // TODO: Implement onRequest() method.
    }

    public function afterAction(Request $request, Response $response): void
    {
        // TODO: Implement afterAction() method.
    }
}