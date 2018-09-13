<?php
namespace frontend\controllers;

use common\components\helpers\Xml;
use common\models\Page;
use yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    
    public function actionSitemap()
    {
        $urlArray = [Yii::$app->params['siteUrl']];

        /** @var Page[] $pages */
        $pages = Page::find()->where(['active' => Page::STATUS_ACTIVE])->with('webpage')->all();
        foreach ($pages as $page) {
            if (!$page->webpage->main) $urlArray[] = Yii::$app->params['siteUrl'] . '/' . $page->webpage->url;
        }

        $data = [];
        foreach ($urlArray as $url) {
            $data[] = ['tag' => 'url', 'body' => ['loc' => $url]];
        }

        Yii::$app->response->format = yii\web\Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'application/xml');

        return Xml::arrayToXml([['tag' => 'urlset', '@attributes' => ['xmlns' => 'http://www.sitemaps.org/schemas/sitemap/0.9'], 'body' => $data]]);
    }
}
