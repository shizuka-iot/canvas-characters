# アイコン作成サイト: キャンバスキャラクターズ

## 概要
このWebサイトはWebブラウザ上でスライダーを使って自由にキャラクターメイキング出来るWebアプリです。
いちいちパラメーターをいじるのが面倒な場合は質問に答えるだけで簡単にキャラクターが出来るモードも用意してあります。

インフラにはAWS Lightsailを使用しています。
EC2はOSやDB、ストレージを選択しそれらを組み合わせて自由度の高いインフラを構築できますが、Lightsailはそれらがパッケージ化されており料金もプランで決まっており明確です。
自由度の低さはデメリットでもありますが逆にパッケージに適合すれば低コストで楽にサービスを作れるのでLightsailを採用しました。

## 開発環境
* Raspberry Pi4 model B 4G
* OS Raspberry Pi OS (debian 10.6)
* Apache2
* PHP 7.3.19-1
* Laravel 7.30.4
* Ajax(jQuery)
* MariaDB 15.1
* CanvasAPI

## 本番環境
* AWS Lightsail (LAMP)

## 使用技術
アプリの核となる部分はhtml5のCavnas要素から出来ています。
CanvasAPIのベジェ曲線を引く関数であるbezierCurveTo()やquadraticCurveTo()を駆使して曲線を引いてキャラクターの顔を描いています。
その為、目頭・目尻・まつげ・こめかみなど膨大な数の座標を管理する必要がありどの座標が顔として成り立つか手探りで調整していく為かなり根気のいる作業でした。
髪の毛はプログラミングで生成しています。

髪の毛が風に煽られて揺れているように見える演出は毛先の座標をランダムな値にしてずらすことで実現しています。

## 簡易作成について
質問に答えると選択次第で様々なキャラクターが出来上がるようになっています。
それぞれの答えにキャラクターのどのパラメーターを変化させるかを記述したJSのオブジェクトを用意してあり、答えるとリアルタイムでキャラクターに反映されています。（キャラクターは最初は非表示にしてあり、全ての質問に答え終わると表示されるようにしています）

質問と答えはDBで管理しAjaxを用いた非同期通信で質問と答えを更新しています。

## 自由に作成するモードについて
自由に作成するモードはhtmlに<input type="range">を用意してその値をJSで読み取り、キャラクター描画クラスのプロパティに代入し、値をアップデート・描画という流れで実現しています。

## お問い合わせページについて
お問い合わせページからお問い合わせを行うと自動返信メールが届くようになっています。
mailableクラスを作成し、自動返信のシステムを作成しました。

## 2021/8/21 Wsl2での開発に移行
1. wslの環境を整える

    必要なもの
    1. apache2
    2. composer 
    3. php 
    4. php-mysql
    5. php-curl
    6. php-mbstring
    7. php-dom

2. フロー

    1. apache2のインストール

        sudo apt install apache2

    2. composer
        やりかたは公式かメモを確認

    3. php 

        sudo apt install php

    4. php-mysql

        sudo apt install php-mysql

    5. php-curl

        sudo apt install php-curl

    6. php-mbstring

        sudo apt install php-mbstring

    7. php-dom

        sudo apt install php-dom

    8. laravelのstorageの権限を変更

        chmod -R 777 storage
