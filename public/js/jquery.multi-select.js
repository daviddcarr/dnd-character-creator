/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/jquery.multi-select.js":
/*!*********************************************!*\
  !*** ./resources/js/jquery.multi-select.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/*
* MultiSelect v0.9.12
* Copyright (c) 2012 Louis Cuny
*
* This program is free software. It comes without any warranty, to
* the extent permitted by applicable law. You can redistribute it
* and/or modify it under the terms of the Do What The Fuck You Want
* To Public License, Version 2, as published by Sam Hocevar. See
* http://sam.zoy.org/wtfpl/COPYING for more details.
*/
!function ($) {
  "use strict";
  /* MULTISELECT CLASS DEFINITION
   * ====================== */

  var MultiSelect = function MultiSelect(element, options) {
    this.options = options;
    this.$element = $(element);
    this.$container = $('<div/>', {
      'class': "ms-container"
    });
    this.$selectableContainer = $('<div/>', {
      'class': 'ms-selectable'
    });
    this.$selectionContainer = $('<div/>', {
      'class': 'ms-selection'
    });
    this.$selectableUl = $('<ul/>', {
      'class': "ms-list",
      'tabindex': '-1'
    });
    this.$selectionUl = $('<ul/>', {
      'class': "ms-list",
      'tabindex': '-1'
    });
    this.scrollTo = 0;
    this.elemsSelector = 'li:visible:not(.ms-optgroup-label,.ms-optgroup-container,.' + options.disabledClass + ')';
  };

  MultiSelect.prototype = {
    constructor: MultiSelect,
    init: function init() {
      var that = this,
          ms = this.$element;

      if (ms.next('.ms-container').length === 0) {
        ms.css({
          position: 'absolute',
          left: '-9999px'
        });
        ms.attr('id', ms.attr('id') ? ms.attr('id') : Math.ceil(Math.random() * 1000) + 'multiselect');
        this.$container.attr('id', 'ms-' + ms.attr('id'));
        this.$container.addClass(that.options.cssClass);
        ms.find('option').each(function () {
          that.generateLisFromOption(this);
        });
        this.$selectionUl.find('.ms-optgroup-label').hide();

        if (that.options.selectableHeader) {
          that.$selectableContainer.append(that.options.selectableHeader);
        }

        that.$selectableContainer.append(that.$selectableUl);

        if (that.options.selectableFooter) {
          that.$selectableContainer.append(that.options.selectableFooter);
        }

        if (that.options.selectionHeader) {
          that.$selectionContainer.append(that.options.selectionHeader);
        }

        that.$selectionContainer.append(that.$selectionUl);

        if (that.options.selectionFooter) {
          that.$selectionContainer.append(that.options.selectionFooter);
        }

        that.$container.append(that.$selectableContainer);
        that.$container.append(that.$selectionContainer);
        ms.after(that.$container);
        that.activeMouse(that.$selectableUl);
        that.activeKeyboard(that.$selectableUl);
        var action = that.options.dblClick ? 'dblclick' : 'click';
        that.$selectableUl.on(action, '.ms-elem-selectable', function () {
          that.select($(this).data('ms-value'));
        });
        that.$selectionUl.on(action, '.ms-elem-selection', function () {
          that.deselect($(this).data('ms-value'));
        });
        that.activeMouse(that.$selectionUl);
        that.activeKeyboard(that.$selectionUl);
        ms.on('focus', function () {
          that.$selectableUl.focus();
        });
      }

      var selectedValues = ms.find('option:selected').map(function () {
        return $(this).val();
      }).get();
      that.select(selectedValues, 'init');

      if (typeof that.options.afterInit === 'function') {
        that.options.afterInit.call(this, this.$container);
      }
    },
    'generateLisFromOption': function generateLisFromOption(option, index, $container) {
      var that = this,
          ms = that.$element,
          attributes = "",
          $option = $(option);

      for (var cpt = 0; cpt < option.attributes.length; cpt++) {
        var attr = option.attributes[cpt];

        if (attr.name !== 'value' && attr.name !== 'disabled') {
          attributes += attr.name + '="' + attr.value + '" ';
        }
      }

      var selectableLi = $('<li ' + attributes + '><span>' + that.escapeHTML($option.text()) + '</span></li>'),
          selectedLi = selectableLi.clone(),
          value = $option.val(),
          elementId = that.sanitize(value);
      selectableLi.data('ms-value', value).addClass('ms-elem-selectable').attr('id', elementId + '-selectable');
      selectedLi.data('ms-value', value).addClass('ms-elem-selection').attr('id', elementId + '-selection').hide();

      if ($option.prop('disabled') || ms.prop('disabled')) {
        selectedLi.addClass(that.options.disabledClass);
        selectableLi.addClass(that.options.disabledClass);
      }

      var $optgroup = $option.parent('optgroup');

      if ($optgroup.length > 0) {
        var optgroupLabel = $optgroup.attr('label'),
            optgroupId = that.sanitize(optgroupLabel),
            $selectableOptgroup = that.$selectableUl.find('#optgroup-selectable-' + optgroupId),
            $selectionOptgroup = that.$selectionUl.find('#optgroup-selection-' + optgroupId);

        if ($selectableOptgroup.length === 0) {
          var optgroupContainerTpl = '<li class="ms-optgroup-container"></li>',
              optgroupTpl = '<ul class="ms-optgroup"><li class="ms-optgroup-label"><span>' + optgroupLabel + '</span></li></ul>';
          $selectableOptgroup = $(optgroupContainerTpl);
          $selectionOptgroup = $(optgroupContainerTpl);
          $selectableOptgroup.attr('id', 'optgroup-selectable-' + optgroupId);
          $selectionOptgroup.attr('id', 'optgroup-selection-' + optgroupId);
          $selectableOptgroup.append($(optgroupTpl));
          $selectionOptgroup.append($(optgroupTpl));

          if (that.options.selectableOptgroup) {
            $selectableOptgroup.find('.ms-optgroup-label').on('click', function () {
              var values = $optgroup.children(':not(:selected, :disabled)').map(function () {
                return $(this).val();
              }).get();
              that.select(values);
            });
            $selectionOptgroup.find('.ms-optgroup-label').on('click', function () {
              var values = $optgroup.children(':selected:not(:disabled)').map(function () {
                return $(this).val();
              }).get();
              that.deselect(values);
            });
          }

          that.$selectableUl.append($selectableOptgroup);
          that.$selectionUl.append($selectionOptgroup);
        }

        index = index == undefined ? $selectableOptgroup.find('ul').children().length : index + 1;
        selectableLi.insertAt(index, $selectableOptgroup.children());
        selectedLi.insertAt(index, $selectionOptgroup.children());
      } else {
        index = index == undefined ? that.$selectableUl.children().length : index;
        selectableLi.insertAt(index, that.$selectableUl);
        selectedLi.insertAt(index, that.$selectionUl);
      }
    },
    'addOption': function addOption(options) {
      var that = this;

      if (options.value !== undefined && options.value !== null) {
        options = [options];
      }

      $.each(options, function (index, option) {
        if (option.value !== undefined && option.value !== null && that.$element.find("option[value='" + option.value + "']").length === 0) {
          var $option = $('<option value="' + option.value + '">' + option.text + '</option>'),
              index = parseInt(typeof option.index === 'undefined' ? that.$element.children().length : option.index),
              $container = option.nested == undefined ? that.$element : $("optgroup[label='" + option.nested + "']");
          $option.insertAt(index, $container);
          that.generateLisFromOption($option.get(0), index, option.nested);
        }
      });
    },
    'escapeHTML': function escapeHTML(text) {
      return $("<div>").text(text).html();
    },
    'activeKeyboard': function activeKeyboard($list) {
      var that = this;
      $list.on('focus', function () {
        $(this).addClass('ms-focus');
      }).on('blur', function () {
        $(this).removeClass('ms-focus');
      }).on('keydown', function (e) {
        switch (e.which) {
          case 40:
          case 38:
            e.preventDefault();
            e.stopPropagation();
            that.moveHighlight($(this), e.which === 38 ? -1 : 1);
            return;

          case 37:
          case 39:
            e.preventDefault();
            e.stopPropagation();
            that.switchList($list);
            return;

          case 9:
            if (that.$element.is('[tabindex]')) {
              e.preventDefault();
              var tabindex = parseInt(that.$element.attr('tabindex'), 10);
              tabindex = e.shiftKey ? tabindex - 1 : tabindex + 1;
              $('[tabindex="' + tabindex + '"]').focus();
              return;
            } else {
              if (e.shiftKey) {
                that.$element.trigger('focus');
              }
            }

        }

        if ($.inArray(e.which, that.options.keySelect) > -1) {
          e.preventDefault();
          e.stopPropagation();
          that.selectHighlighted($list);
          return;
        }
      });
    },
    'moveHighlight': function moveHighlight($list, direction) {
      var $elems = $list.find(this.elemsSelector),
          $currElem = $elems.filter('.ms-hover'),
          $nextElem = null,
          elemHeight = $elems.first().outerHeight(),
          containerHeight = $list.height(),
          containerSelector = '#' + this.$container.prop('id');
      $elems.removeClass('ms-hover');

      if (direction === 1) {
        // DOWN
        $nextElem = $currElem.nextAll(this.elemsSelector).first();

        if ($nextElem.length === 0) {
          var $optgroupUl = $currElem.parent();

          if ($optgroupUl.hasClass('ms-optgroup')) {
            var $optgroupLi = $optgroupUl.parent(),
                $nextOptgroupLi = $optgroupLi.next(':visible');

            if ($nextOptgroupLi.length > 0) {
              $nextElem = $nextOptgroupLi.find(this.elemsSelector).first();
            } else {
              $nextElem = $elems.first();
            }
          } else {
            $nextElem = $elems.first();
          }
        }
      } else if (direction === -1) {
        // UP
        $nextElem = $currElem.prevAll(this.elemsSelector).first();

        if ($nextElem.length === 0) {
          var $optgroupUl = $currElem.parent();

          if ($optgroupUl.hasClass('ms-optgroup')) {
            var $optgroupLi = $optgroupUl.parent(),
                $prevOptgroupLi = $optgroupLi.prev(':visible');

            if ($prevOptgroupLi.length > 0) {
              $nextElem = $prevOptgroupLi.find(this.elemsSelector).last();
            } else {
              $nextElem = $elems.last();
            }
          } else {
            $nextElem = $elems.last();
          }
        }
      }

      if ($nextElem.length > 0) {
        $nextElem.addClass('ms-hover');
        var scrollTo = $list.scrollTop() + $nextElem.position().top - containerHeight / 2 + elemHeight / 2;
        $list.scrollTop(scrollTo);
      }
    },
    'selectHighlighted': function selectHighlighted($list) {
      var $elems = $list.find(this.elemsSelector),
          $highlightedElem = $elems.filter('.ms-hover').first();

      if ($highlightedElem.length > 0) {
        if ($list.parent().hasClass('ms-selectable')) {
          this.select($highlightedElem.data('ms-value'));
        } else {
          this.deselect($highlightedElem.data('ms-value'));
        }

        $elems.removeClass('ms-hover');
      }
    },
    'switchList': function switchList($list) {
      $list.blur();
      this.$container.find(this.elemsSelector).removeClass('ms-hover');

      if ($list.parent().hasClass('ms-selectable')) {
        this.$selectionUl.focus();
      } else {
        this.$selectableUl.focus();
      }
    },
    'activeMouse': function activeMouse($list) {
      var that = this;
      this.$container.on('mouseenter', that.elemsSelector, function () {
        $(this).parents('.ms-container').find(that.elemsSelector).removeClass('ms-hover');
        $(this).addClass('ms-hover');
      });
      this.$container.on('mouseleave', that.elemsSelector, function () {
        $(this).parents('.ms-container').find(that.elemsSelector).removeClass('ms-hover');
        ;
      });
    },
    'refresh': function refresh() {
      this.destroy();
      this.$element.multiSelect(this.options);
    },
    'destroy': function destroy() {
      $("#ms-" + this.$element.attr("id")).remove();
      this.$element.css('position', '').css('left', '');
      this.$element.removeData('multiselect');
    },
    'select': function select(value, method) {
      if (typeof value === 'string') {
        value = [value];
      }

      var that = this,
          ms = this.$element,
          msIds = $.map(value, function (val) {
        return that.sanitize(val);
      }),
          selectables = this.$selectableUl.find('#' + msIds.join('-selectable, #') + '-selectable').filter(':not(.' + that.options.disabledClass + ')'),
          selections = this.$selectionUl.find('#' + msIds.join('-selection, #') + '-selection').filter(':not(.' + that.options.disabledClass + ')'),
          options = ms.find('option:not(:disabled)').filter(function () {
        return $.inArray(this.value, value) > -1;
      });

      if (method === 'init') {
        selectables = this.$selectableUl.find('#' + msIds.join('-selectable, #') + '-selectable'), selections = this.$selectionUl.find('#' + msIds.join('-selection, #') + '-selection');
      }

      if (selectables.length > 0) {
        selectables.addClass('ms-selected').hide();
        selections.addClass('ms-selected').show();
        options.prop('selected', true);
        that.$container.find(that.elemsSelector).removeClass('ms-hover');
        var selectableOptgroups = that.$selectableUl.children('.ms-optgroup-container');

        if (selectableOptgroups.length > 0) {
          selectableOptgroups.each(function () {
            var selectablesLi = $(this).find('.ms-elem-selectable');

            if (selectablesLi.length === selectablesLi.filter('.ms-selected').length) {
              $(this).find('.ms-optgroup-label').hide();
            }
          });
          var selectionOptgroups = that.$selectionUl.children('.ms-optgroup-container');
          selectionOptgroups.each(function () {
            var selectionsLi = $(this).find('.ms-elem-selection');

            if (selectionsLi.filter('.ms-selected').length > 0) {
              $(this).find('.ms-optgroup-label').show();
            }
          });
        } else {
          if (that.options.keepOrder && method !== 'init') {
            var selectionLiLast = that.$selectionUl.find('.ms-selected');

            if (selectionLiLast.length > 1 && selectionLiLast.last().get(0) != selections.get(0)) {
              selections.insertAfter(selectionLiLast.last());
            }
          }
        }

        if (method !== 'init') {
          ms.trigger('change');

          if (typeof that.options.afterSelect === 'function') {
            that.options.afterSelect.call(this, value);
          }
        }
      }
    },
    'deselect': function deselect(value) {
      if (typeof value === 'string') {
        value = [value];
      }

      var that = this,
          ms = this.$element,
          msIds = $.map(value, function (val) {
        return that.sanitize(val);
      }),
          selectables = this.$selectableUl.find('#' + msIds.join('-selectable, #') + '-selectable'),
          selections = this.$selectionUl.find('#' + msIds.join('-selection, #') + '-selection').filter('.ms-selected').filter(':not(.' + that.options.disabledClass + ')'),
          options = ms.find('option').filter(function () {
        return $.inArray(this.value, value) > -1;
      });

      if (selections.length > 0) {
        selectables.removeClass('ms-selected').show();
        selections.removeClass('ms-selected').hide();
        options.prop('selected', false);
        that.$container.find(that.elemsSelector).removeClass('ms-hover');
        var selectableOptgroups = that.$selectableUl.children('.ms-optgroup-container');

        if (selectableOptgroups.length > 0) {
          selectableOptgroups.each(function () {
            var selectablesLi = $(this).find('.ms-elem-selectable');

            if (selectablesLi.filter(':not(.ms-selected)').length > 0) {
              $(this).find('.ms-optgroup-label').show();
            }
          });
          var selectionOptgroups = that.$selectionUl.children('.ms-optgroup-container');
          selectionOptgroups.each(function () {
            var selectionsLi = $(this).find('.ms-elem-selection');

            if (selectionsLi.filter('.ms-selected').length === 0) {
              $(this).find('.ms-optgroup-label').hide();
            }
          });
        }

        ms.trigger('change');

        if (typeof that.options.afterDeselect === 'function') {
          that.options.afterDeselect.call(this, value);
        }
      }
    },
    'select_all': function select_all() {
      var ms = this.$element,
          values = ms.val();
      ms.find('option:not(":disabled")').prop('selected', true);
      this.$selectableUl.find('.ms-elem-selectable').filter(':not(.' + this.options.disabledClass + ')').addClass('ms-selected').hide();
      this.$selectionUl.find('.ms-optgroup-label').show();
      this.$selectableUl.find('.ms-optgroup-label').hide();
      this.$selectionUl.find('.ms-elem-selection').filter(':not(.' + this.options.disabledClass + ')').addClass('ms-selected').show();
      this.$selectionUl.focus();
      ms.trigger('change');

      if (typeof this.options.afterSelect === 'function') {
        var selectedValues = $.grep(ms.val(), function (item) {
          return $.inArray(item, values) < 0;
        });
        this.options.afterSelect.call(this, selectedValues);
      }
    },
    'deselect_all': function deselect_all() {
      var ms = this.$element,
          values = ms.val();
      ms.find('option').prop('selected', false);
      this.$selectableUl.find('.ms-elem-selectable').removeClass('ms-selected').show();
      this.$selectionUl.find('.ms-optgroup-label').hide();
      this.$selectableUl.find('.ms-optgroup-label').show();
      this.$selectionUl.find('.ms-elem-selection').removeClass('ms-selected').hide();
      this.$selectableUl.focus();
      ms.trigger('change');

      if (typeof this.options.afterDeselect === 'function') {
        this.options.afterDeselect.call(this, values);
      }
    },
    sanitize: function sanitize(value) {
      var hash = 0,
          i,
          character;
      if (value.length == 0) return hash;
      var ls = 0;

      for (i = 0, ls = value.length; i < ls; i++) {
        character = value.charCodeAt(i);
        hash = (hash << 5) - hash + character;
        hash |= 0; // Convert to 32bit integer
      }

      return hash;
    }
  };
  /* MULTISELECT PLUGIN DEFINITION
   * ======================= */

  $.fn.multiSelect = function () {
    var option = arguments[0],
        args = arguments;
    return this.each(function () {
      var $this = $(this),
          data = $this.data('multiselect'),
          options = $.extend({}, $.fn.multiSelect.defaults, $this.data(), _typeof(option) === 'object' && option);

      if (!data) {
        $this.data('multiselect', data = new MultiSelect(this, options));
      }

      if (typeof option === 'string') {
        data[option](args[1]);
      } else {
        data.init();
      }
    });
  };

  $.fn.multiSelect.defaults = {
    keySelect: [32],
    selectableOptgroup: false,
    disabledClass: 'disabled',
    dblClick: false,
    keepOrder: false,
    cssClass: ''
  };
  $.fn.multiSelect.Constructor = MultiSelect;

  $.fn.insertAt = function (index, $parent) {
    return this.each(function () {
      if (index === 0) {
        $parent.prepend(this);
      } else {
        $parent.children().eq(index - 1).after(this);
      }
    });
  };
}(window.jQuery);

/***/ }),

/***/ 2:
/*!***************************************************!*\
  !*** multi ./resources/js/jquery.multi-select.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/davidcarr/Code/dnd-character-creator/resources/js/jquery.multi-select.js */"./resources/js/jquery.multi-select.js");


/***/ })

/******/ });