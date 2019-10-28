# translator
## 如何使用
```php
$translator = $this->container->get("translator");
```

## 方法列表
### function has($key, $locale = null, $fallback = true)
> 判断是否包含配置项
```php
$isHas = $translator->has("passwords.sent");
```

### function hasForLocale($key, $locale = null)
> 定义某个语言下的配置是否存在
```php
$isHas = $translator->has("passwords.sent", "en");
```


### function get($key, array $replace = [], $locale = null, $fallback = true)
> 获取配置
```php
# 获取默认语言包下的配置
$res = $translator->get("passwords.sent")
# 信息占位符使用
$res = $translator->get("hello, :world", ['world' => '世界']);
# 使用备选语言
$res = $translator->get("passwords.sent", [], null, true);
```


### function setFallback($fallback)
> 设置备选语言
```php 
$translator->setFallback('en');
```

### function getFallback()
> 设置正被使用的备选语言
```php 
echo $translator->getFallback();
```


### function choice($key, $number, array $replace = [], $locale = null)
> 处理复数情况
```php
# set arr = explode('|', key); if (number > 1) { return 使用replace替换arr[1];} else {return arr[0]}
$rs = $translator->choice('There is one apple|There are :count apples',2,array('count' => 5));
```

