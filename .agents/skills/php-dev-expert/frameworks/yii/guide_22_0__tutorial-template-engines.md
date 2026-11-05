# Special Topics: Template Engines | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/tutorial-template-engines

---

0

# Using template engines [¶](#using-template-engines)

By default, Yii uses PHP as its template language, but you can configure Yii to support other rendering engines, such as
[Twig](https://twig.symfony.com/) or [Smarty](https://www.smarty.net/) available as extensions.

The `view` component is responsible for rendering views. You can add a custom template engine by reconfiguring this
component's behavior:

```
[
    'components' => [
        'view' => [
            'class' => 'yii\web\View',
            'renderers' => [
                'tpl' => [
                    'class' => 'yii\smarty\ViewRenderer',
                    //'cachePath' => '@runtime/Smarty/cache',
                ],
                'twig' => [
                    'class' => 'yii\twig\ViewRenderer',
                    'cachePath' => '@runtime/Twig/cache',
                    // Array of twig options:
                    'options' => [
                        'auto_reload' => true,
                    ],
                    'globals' => ['html' => '\yii\helpers\Html'],
                    'uses' => ['yii\bootstrap'],
                ],
                // ...
            ],
        ],
    ],
]
```

In the code above, both Smarty and Twig are configured to be usable by the view files. But in order to get these extensions into your project, you need to also modify
your `composer.json` file to include them, too:

```
"yiisoft/yii2-smarty": "~2.0.0",
"yiisoft/yii2-twig": "~2.0.0",
```

That code would be added to the `require` section of `composer.json`. After making that change and saving the file, you can install the extensions by running `composer update --prefer-dist` in the command-line.

For details about using concrete template engine please refer to its documentation:

- [Twig guide](https://www.yiiframework.com/extension/yiisoft/yii2-twig/doc/guide/)
- [Smarty guide](https://www.yiiframework.com/extension/yiisoft/yii2-smarty/doc/guide/)

[Standalone Actions](guide_22_0__tutorial-standalone-actions.md)

[Go to Top](#top)

[Working with Third-Party Code](guide_22_0__tutorial-yii-integration.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/tutorial-template-engines.md) !
