# xhgui-docker 
## 介绍
- 该项目仅包含运行xhgui中文汉化版所需要的环境
- 内置2个扩展文件，用于php7，php8. tideways-4.1.7.tar.gz 用于php7，tideways-5.0.4.tar.gz用于php8
- www目录下说明
  - xhgui-header 用于最小接入目标系统 ，具体使用看 https://github.com/liuchenrang/xhgui-header
## 启动步骤
- docker network create --driver=bridge xhgui-net
- docker-compose up -d