# themrish

for WordPress theme develop auxiliary tool

WordPressのテーマ開発補助ツールです。

- ブラウザシンクによるソースファイル保存時のページリロード
- sassコンパイラ
- jsコンパイラ

## 依存アプリケーション
- [npm](https://www.npmjs.com/)
- [gulp](http://gulpjs.com/)

## install

1. Download to theme folder
2. Command execute
 1. ` npm install `
 2. edit /gulpconfig.js
 3. ` gulp `

### 注意点
config.default.js にて browserSync のproxyだけを変えたい場合は、このファイルに直接変更してください。

カレントディレクトリにある gulpconfig.js にproxyだけを定義しようとすると、[files]の方を一緒に定義しないと、未定義で上書きされてしまいます。

回避方法があったらどなたか教えてください。

## version

0.0.1 ベータリリース