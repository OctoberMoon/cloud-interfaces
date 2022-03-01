# cloud-interfaces

1. **安装**:
```php
composer require october-moon/cloud-interfaces
```
2. **配置:** config/autoload/services.php 配置文件内进行一些简单的配置，即可通过动态代理自动创建消费者类。

手动创建消费者类:
```php

<?php
namespace App\JsonRpc;
use Hyperf\RpcClient\AbstractServiceClient;
class CalculatorServiceConsumer extends AbstractServiceClient implements CalculatorServiceInterface
{
	/**
	* 定义对应服务提供者的服务名称
	* @var string
	*/
	protected $serviceName = 'CalculatorService';

	/**
	* 定义对应服务提供者的服务协议
	* @var string
	*/
	protected $protocol = 'jsonrpc-http';
	public function add(int $a, int $b): int
	{
		return $this->__request(__FUNCTION__, compact('a', 'b'));
	}
}
```
3. **配置dependencies:**

```php
App\JsonRpc\CalculatorServiceInterface::class => App\JsonRpc\CalculatorServiceConsumer::class,
```

5. **使用:** 通过注入 CalculatorServiceInterface 接口来使用客户端了
```php
<?php
use Hyperf\Utils\ApplicationContext;
use App\JsonRpc\CalculatorServiceInterface;
$client = ApplicationContext::getContainer()->get(CalculatorServiceInterface::class);
$result = $client->sum(1, 2);
var_dump($result);
```
6. 更多请参考[Hyperf文档](https://hyperf.wiki/2.2/#/zh-cn/json-rpc?id=%E5%AE%9A%E4%B9%89%E6%9C%8D%E5%8A%A1%E6%B6%88%E8%B4%B9%E8%80%85 "Hyperf文档")