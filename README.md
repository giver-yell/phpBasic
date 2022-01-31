# phpBasic

## local 立ち上げ

- docker-compose up
  `./vendor/bin/sail up -d`
- URL
  `http://localhost:8573/`

## SQL 操作

- SQL ログイン
  `./vendor/bin/sail mysql mybbs`

- 選択されている DB 確認
  `SELECT DATABASE();`

- テーブル確認
  `SHOW TABLES;`

## migragtion

- ファイル作成
  `./vendor/bin/sail artisan make:migration [ファイル名]`

## 環境構築

### Laravel install

- `curl -s "https://laravel.build/MyBBS" | bash`

### vs code 拡張機能のインストール

※ .editorconfig ファイルを適用するため

- EditorConfig for VS Code
- Laravel Blade Snippets

### controller の作成

- `./vendor/bin/sail artisan make:controller [ファイル名]`

## PORT の変更

.env に`APP_PORT=8573`を追加
