
# マイグレーションファイル作成
php artisan make:migration テーブル名<example_name>
php artisan make:migration 

# 全てのテーブルを削除してマイグレーション実行
php artisan migrate:fresh

# マイグレーション実行
php artisan migrate


# コントローラー作成
php artisan make:controller 名前Controller<ExampleName>
php artisan make:controller Controller

# モデル作成
php artisan make:model モデル名<ExampleName>
php artisan make:model 


# モデル名が複数形になる対策
例）SubjectMaster
class SubjectMaster extends Model
{
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'subject_master'; // ここで任意の名前を設定
}

# swaggerのファイルを明示的に作成するコマンド(エラーがない場合は保存で自動作成される)
php artisan l5-swagger:generate
