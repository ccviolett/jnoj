<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Problem */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="problem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput() ?>

    <?= $form->field($model, 'time_limit', [
        'template' => "{label}\n<div class=\"input-group\">{input}<span class=\"input-group-addon\">s</span></div>",
    ])->textInput(['maxlength' => 128, 'autocomplete'=>'off']) ?>

    <?= $form->field($model, 'memory_limit', [
        'template' => "{label}\n<div class=\"input-group\">{input}<span class=\"input-group-addon\">MByte</span></div>",
    ])->textInput(['maxlength' => 128, 'autocomplete'=>'off']) ?>

    <?= $form->field($model, 'description')->widget('app\widgets\editormd\Editormd', [
        'clientOptions' => [
            'placeholder' => 'description',
            'height' => 300,
            'imageUpload' => true,
            'tex' => true,
            'flowChart' => true,
            'sequenceDiagram' => true,
            'autoFocus' => false,
            'imageUploadURL' => Url::to(['img_upload']),
        ]
    ])->label(); ?>

    <?= $form->field($model, 'input')->widget('app\widgets\editormd\Editormd', [
        'clientOptions' => [
            'placeholder' => 'input',
            'height' => 300,
            'imageUpload' => true,
            'tex' => true,
            'flowChart' => true,
            'sequenceDiagram' => true,
            'autoFocus' => false,
            'imageUploadURL' => Url::to(['img_upload']),
        ]
    ])->label(); ?>

    <?= $form->field($model, 'output')->widget('app\widgets\editormd\Editormd', [
        'clientOptions' => [
            'placeholder' => 'output',
            'height' => 300,
            'imageUpload' => true,
            'tex' => true,
            'flowChart' => true,
            'sequenceDiagram' => true,
            'autoFocus' => false,
            'imageUploadURL' => Url::to(['img_upload']),
        ]
    ])->label(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'sample_input')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'sample_output')->textarea(['rows' => 6]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'sample_input_2')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'sample_output_2')->textarea(['rows' => 6]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'sample_input_3')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'sample_output_3')->textarea(['rows' => 6]) ?>
        </div>
    </div>

    <?= $form->field($model, 'spj')->radioList([
        '1' => Yii::t('app', 'Yes'),
        '0' => Yii::t('app', 'No')
    ])?>

    <?= $form->field($model, 'hint')->widget('app\widgets\editormd\Editormd', [
        'clientOptions' => [
            'placeholder' => 'hint',
            'height' => 300,
            'imageUpload' => true,
            'tex' => true,
            'flowChart' => true,
            'sequenceDiagram' => true,
            'autoFocus' => false,
            'imageUploadURL' => Url::to(['img_upload']),
        ]
    ])->label(); ?>

    <?= $form->field($model, 'tags')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>