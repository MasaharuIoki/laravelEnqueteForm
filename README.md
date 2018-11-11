# Laravelで簡単アンケートフォーム

前提条件

下記がインストールされていること
* PHP ver 7.2.11
* MySQL 5.7.24
※上記はXAMPP 7.2.11(PHP 7.2.11 / MariaDB 10.1.36)でも動作確認しました。
* Laravel Framework 5.7.12
* Composer

動作手順

1.任意の場所にソースをクローン
`git clone https://github.com/atsu8492/enqueteForm.git`

2.環境情報の統一
./enqueteForm/に移動し下記コマンドを実行
`composer install`

3.MySQLへの接続情報を記載
/enqueteForm/.env.exampleファイルをコピーして.envファイルにリネーム
.envファイルにMySQLの接続先,ポート,データベース名,接続するユーザー/PWを記載

例：
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=enqueteForm
    DB_USERNAME=enqueteForm
    DB_PASSWORD=password

4.アプリケーションキーの初期化
`php artisan key:generate`

5.Migrationの実行
`php artisan migrate`

6.サーバー起動
`php artisan serve`

7.ブラウザから下記URLへアクセス
`http://localhost:8000/input`

