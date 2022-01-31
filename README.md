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

- カラムの内容確認
  `DESC [table名];`

## migragtion

- migration ディレクトリ作成
  `./vendor/bin/sail artisan make:migration [ファイル名]`

- migrate 実行
  `./vendor/bin/sail artisan migrate`

## model

- model ディレクトリ作成
  `./vendor/bin/sail artisan make:model Post`

## CLI

- コンテナ接続
  `./vendor/bin/sail tinker`

- DB

  - insert

    - 例
      `$post = new App\Models\Post();`
      `$post->title = 'Title 1';`
      `$post->body = 'Body 1';`
      `$post->save();`

    - 例 2
      `App\Models\Post::create(['title' => 'Title 2', 'body' => 'Body 2']);`
      ※model に$fillable の設定が必要（セキュリティ面で一括登録の許可が必要なため）

  - select

    - 全件取得
      `App\Models\Post::all();`

    - 特定の key 取得 例
      `App\Models\Post::find(3);`

    - 条件付きの取得 例
      `App\Models\Post::orderBy('created_at', 'desc')->limit(3)->get();`

  - update

    - 例
      `$post4 = App\Models\Post::fint(4);`
      `$post4->title = 'Title updated';`
      `$post4->save();`

  - delete
    - 例
      `$post5 = App\Models\Post::find(5);`
      `$post5->delete();`

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
