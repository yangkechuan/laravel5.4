@servers(['localhost' => '127.0.0.1'])

@task('web', ['on' => 'localhost'])
    cd /data/ngx_openresty/nginx/html/laravel
    git pull origin master
    php artisan config:cache
    php artisan route:cache

@endtask

@task('api',['on'=>'localhost'])

    cd /data/ngx_openresty/nginx/html/ApiTest
    git pull origin master

@endtask
