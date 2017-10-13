<?php

namespace upch\theme\padlock\widgets;

use yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\helpers\Html;

/**
 * Class Menu
 * @package wkii\widgets *
 */
class SideNav extends yii\widgets\Menu {

    public $linkTemplate    = '<a href="{url}"{pjax}>{icon} <span>{label}</span> {angle}</a>';
    public $submenuTemplate = '<ul class="treeview-menu">{items}</ul>';
    public $activateParents = true;
    public $options         = ['class' => 'side-nav'];

    protected function renderItem($item) {
        if (isset($item['url'])) {
            $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);
            return strtr($template, [
                '{url}'   => Html::encode(Url::to($item['url'])),
                '{label}' => $item['label'],
                '{icon}'  => isset($item['icon']) ? '<i class="fa ' . $item['icon'] . '"></i>' : '',
                '{angle}' => isset($item['items']) ? '<i class="fa fa-angle-left pull-right"></i>' : '',
                '{pjax}'  => isset($item['pjax']) && $item['pjax'] === true ? ' data-pjax="true"' : ''
            ]);
        } else {
            $template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);
            return strtr($template, [
                '{label}' => $item['label'],
                '{icon}'  => isset($item['icon']) ? '<i class="fa ' . $item['icon'] . '"></i>' : ''
            ]);
        }
    }

}
