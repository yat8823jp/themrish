# themrish

for WordPress theme develop auxiliary tool

[Version 2 Release](https://github.com/yat8823jp/themrishv2)

WordPressのテーマ開発補助ツールです。

- ブラウザシンクによるソースファイル保存時のページリロード
- sassコンパイラ
- jsコンパイラ

## 依存アプリケーション
- [node.js](https://nodejs.org/ja/) version: 8.11.2 later
- [npm](https://www.npmjs.com/) version: 5.6.0 later
- [gulp](http://gulpjs.com/) version: 3.9.1 later
- [babel](https://babeljs.io/) babel2015
- [browsersync](https://browsersync.io/) version: 2.11.1

## install

1. Download to theme folder
2. Command execute
 1. ` npm install `
 2. edit /gulpconfig.js
 3. ` gulp `

## config

Edit ./gulpconfig.js

### proxy

```
export default {
    browserSync: {
        proxy: 'local.dev' //ご自身の開発環境似合わせてURLを設定
    }
}; 
```

### 注意点
config.default.js にて browserSync のproxyだけを変えたい場合は、このファイルに直接変更してください。

カレントディレクトリにある gulpconfig.js に proxy だけを定義しようとすると、[files]の方を一緒に定義しないと、未定義で上書きされてしまいます。

回避方法があったらどなたか教えてください。

## version

- 1.0.0 release
- 0.0.2 module update
- 0.0.1 beta release