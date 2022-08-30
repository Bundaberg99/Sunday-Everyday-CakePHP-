<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\View;

use Cake\View\View;

/**
 * Application View
 *
 * Your application's default view class
 *
 * @link https://book.cakephp.org/4/en/views.html#the-app-view
 */
class AppView extends View
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading helpers.
     *
     * e.g. `$this->loadHelper('Html');`
     *
     * @return void
     */
    public function initialize(): void
    {
        $formTemplate=[
            'inputContainer'=>'<div class="input {{type}}{{required}}">{{content}}</div>',
            'label'=>'<label{{attrs}} class="form-label">{{text}}</label>',
            'select' => '<select name="{{name}}"{{attrs}}>{{content}}</select>',
            'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
            'input'=>'<input type="{{type}}" name="{{name}}" class="form-control"{{attrs}}/>',
            'textarea'=>'<textarea name="{{name}}" class="form-control" {{attrs}}>{{value}}</textarea>',
            'nestingLabel'=>'{{hidden}}<label class="form-check-label" {{attrs}}>{{input}}{{text}}</label>',
            'checkbox'=>'<input type="checkbox" name="{{name}}" value="{{value}}"class="form-check-input"{{attrs}}/>'
        ];
        $this->Form->setTemplates($formTemplate);
        $this->loadHelper('Authentication.Identity');
    }
}
