<?php

use WireUi\View\Components;

return [
    /*
        |--------------------------------------------------------------------------
        | Icons
        |--------------------------------------------------------------------------
        |
        | The icons config will be used in icon component as default
        | https://heroicons.com
        |
    */
    'icons' => [
        'style' => env('WIREUI_ICONS_STYLE', 'solid'),
    ],

    /*
        |--------------------------------------------------------------------------
        | Modal
        |--------------------------------------------------------------------------
        |
        | The default modal preferences
        |
    */
    'modal' => [
        'zIndex'   => env('WIREUI_MODAL_Z_INDEX', 'z-50'),
        'maxWidth' => env('WIREUI_MODAL_MAX_WIDTH', '2xl'),
        'spacing'  => env('WIREUI_MODAL_SPACING', 'p-4'),
        'align'    => env('WIREUI_MODAL_ALIGN', 'start'),
        'blur'     => env('WIREUI_MODAL_BLUR', false),
    ],

    /*
        |--------------------------------------------------------------------------
        | Components
        |--------------------------------------------------------------------------
        |
        | List with WireUI components.
        | Change the alias to call the component with a different name.
        | Extend the component and replace your changes in this file.
        | Remove the component from this file if you don't want to use.
        |
     */
    'components' => [
        'icon' => [
            'class' => Components\Icon::class,
            'alias' => 'w-icon',
        ],
        'icon.spinner' => [
            'class' => Components\Icons\Spinner::class,
            'alias' => 'w-icon.spinner',
        ],
        'input' => [
            'class' => Components\Input::class,
            'alias' => 'w-input',
        ],
        'textarea' => [
            'class' => Components\Textarea::class,
            'alias' => 'w-textarea',
        ],
        'label' => [
            'class' => Components\Label::class,
            'alias' => 'w-label',
        ],
        'error' => [
            'class' => Components\Error::class,
            'alias' => 'w-error',
        ],
        'errors' => [
            'class' => Components\Errors::class,
            'alias' => 'w-errors',
        ],
        'inputs.maskable' => [
            'class' => Components\Inputs\MaskableInput::class,
            'alias' => 'w-inputs.maskable',
        ],
        'inputs.phone' => [
            'class' => Components\Inputs\PhoneInput::class,
            'alias' => 'w-inputs.phone',
        ],
        'inputs.currency' => [
            'class' => Components\Inputs\CurrencyInput::class,
            'alias' => 'w-inputs.currency',
        ],
        'button' => [
            'class' => Components\Button::class,
            'alias' => 'w-button',
        ],
        'button.circle' => [
            'class' => Components\CircleButton::class,
            'alias' => 'w-button.circle',
        ],
        'dropdown' => [
            'class' => Components\Dropdown::class,
            'alias' => 'w-dropdown',
        ],
        'dropdown.item' => [
            'class' => Components\Dropdown\DropdownItem::class,
            'alias' => 'w-dropdown.item',
        ],
        'dropdown.header' => [
            'class' => Components\Dropdown\DropdownHeader::class,
            'alias' => 'w-dropdown.header',
        ],
        'notifications' => [
            'class' => Components\Notifications::class,
            'alias' => 'w-notifications',
        ],
        'datetime-picker' => [
            'class' => Components\DatetimePicker::class,
            'alias' => 'w-datetime-picker',
        ],
        'time-picker' => [
            'class' => Components\TimePicker::class,
            'alias' => 'w-time-picker',
        ],
        'card' => [
            'class' => Components\Card::class,
            'alias' => 'w-card',
        ],
        'native-select' => [
            'class' => Components\NativeSelect::class,
            'alias' => 'w-native-select',
        ],
        'select' => [
            'class' => Components\Select::class,
            'alias' => 'w-select',
        ],
        'select.option' => [
            'class' => Components\Select\Option::class,
            'alias' => 'w-select.option',
        ],
        'select.user-option' => [
            'class' => Components\Select\UserOption::class,
            'alias' => 'w-select.user-option',
        ],
        'toggle' => [
            'class' => Components\Toggle::class,
            'alias' => 'w-toggle',
        ],
        'checkbox' => [
            'class' => Components\Checkbox::class,
            'alias' => 'w-checkbox',
        ],
        'radio' => [
            'class' => Components\Radio::class,
            'alias' => 'w-radio',
        ],
        'modal' => [
            'class' => Components\Modal::class,
            'alias' => 'w-modal',
        ],
        'modal.card' => [
            'class' => Components\ModalCard::class,
            'alias' => 'w-modal.card',
        ],
        'dialog' => [
            'class' => Components\Dialog::class,
            'alias' => 'w-dialog',
        ],
    ],
];
