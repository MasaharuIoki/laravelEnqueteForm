# Laravelで簡単アンケートフォーム
動作環境

* PHP 7.2.11
* MySQL 5.7.24
* Laravel Framework 5.7.12
* Composer


動作手順

1.任意の場所にソースをクローン
`git clone https://github.com/atsu8492/enqueteForm.git`
2.環境情報の統一
`composer install`

3.MySQLへの接続情報を記載
.envファイルにDBに関する情報を記載
（画像は、enqueteFormにenqueteForm-passwordで繋ぐ設定）

4.アプリケーションキーの初期化
`php artisan key:generate`

5.Migrationの実行
`php artisan migrate`




