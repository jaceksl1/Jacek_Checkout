define([
        'uiComponent',
        'ko',
        'jquery',
    ], function (Component, ko, $) {
        'use strict';
        return Component.extend({
            defaults: {
                template: 'Jacek_Checkout/custom-text'
            },

            initialize: function () {
                var self = this;
                this._super();
            }

        });
    }
);
