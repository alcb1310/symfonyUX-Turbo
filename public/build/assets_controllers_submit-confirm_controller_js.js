(self["webpackChunk"] = self["webpackChunk"] || []).push([["assets_controllers_submit-confirm_controller_js"],{

/***/ "./assets/controllers/submit-confirm_controller.js":
/*!*********************************************************!*\
  !*** ./assets/controllers/submit-confirm_controller.js ***!
  \*********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _default)
/* harmony export */ });
/* harmony import */ var regenerator_runtime_runtime_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! regenerator-runtime/runtime.js */ "./node_modules/regenerator-runtime/runtime.js");
/* harmony import */ var regenerator_runtime_runtime_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(regenerator_runtime_runtime_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_web_url_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/web.url.js */ "./node_modules/core-js/modules/web.url.js");
/* harmony import */ var core_js_modules_web_url_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_url_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var stimulus__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! stimulus */ "./node_modules/stimulus/index.js");
/* harmony import */ var sweetalert2__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! sweetalert2 */ "./node_modules/sweetalert2/dist/sweetalert2.all.js");
/* harmony import */ var sweetalert2__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(sweetalert2__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var stimulus_use__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! stimulus-use */ "./node_modules/stimulus-use/dist/index.js");
function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

















function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }




/* stimulusFetch: 'lazy' */

var _default = /*#__PURE__*/function (_Controller) {
  _inherits(_default, _Controller);

  var _super = _createSuper(_default);

  function _default() {
    _classCallCheck(this, _default);

    return _super.apply(this, arguments);
  }

  _createClass(_default, [{
    key: "connect",
    value: function connect() {
      (0,stimulus_use__WEBPACK_IMPORTED_MODULE_17__.useDispatch)(this);
    }
  }, {
    key: "onSubmit",
    value: function onSubmit(event) {
      var _this = this;

      event.preventDefault();
      sweetalert2__WEBPACK_IMPORTED_MODULE_16___default().fire({
        title: this.titleValue || null,
        text: this.textValue || null,
        icon: this.iconValue || null,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: this.confirmButtonTextValue || 'Yes',
        showLoaderOnConfirm: true,
        preConfirm: function preConfirm() {
          return _this.submitForm();
        }
      });
    }
  }, {
    key: "submitForm",
    value: function () {
      var _submitForm = _asyncToGenerator( /*#__PURE__*/regeneratorRuntime.mark(function _callee() {
        var response;
        return regeneratorRuntime.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                if (this.submitAsyncValue) {
                  _context.next = 3;
                  break;
                }

                this.element.submit();
                return _context.abrupt("return");

              case 3:
                _context.next = 5;
                return fetch(this.element.action, {
                  method: this.element.method,
                  body: new URLSearchParams(new FormData(this.element))
                });

              case 5:
                response = _context.sent;
                this.dispatch('async:submitted', {
                  response: response
                });

              case 7:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this);
      }));

      function submitForm() {
        return _submitForm.apply(this, arguments);
      }

      return submitForm;
    }()
  }]);

  return _default;
}(stimulus__WEBPACK_IMPORTED_MODULE_15__.Controller);

_defineProperty(_default, "values", {
  title: String,
  text: String,
  icon: String,
  confirmButtonText: String,
  submitAsync: Boolean
});



/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvY29udHJvbGxlcnMvc3VibWl0LWNvbmZpcm1fY29udHJvbGxlci5qcyJdLCJuYW1lcyI6WyJ1c2VEaXNwYXRjaCIsImV2ZW50IiwicHJldmVudERlZmF1bHQiLCJTd2FsIiwidGl0bGUiLCJ0aXRsZVZhbHVlIiwidGV4dCIsInRleHRWYWx1ZSIsImljb24iLCJpY29uVmFsdWUiLCJzaG93Q2FuY2VsQnV0dG9uIiwiY29uZmlybUJ1dHRvbkNvbG9yIiwiY2FuY2VsQnV0dG9uQ29sb3IiLCJjb25maXJtQnV0dG9uVGV4dCIsImNvbmZpcm1CdXR0b25UZXh0VmFsdWUiLCJzaG93TG9hZGVyT25Db25maXJtIiwicHJlQ29uZmlybSIsInN1Ym1pdEZvcm0iLCJzdWJtaXRBc3luY1ZhbHVlIiwiZWxlbWVudCIsInN1Ym1pdCIsImZldGNoIiwiYWN0aW9uIiwibWV0aG9kIiwiYm9keSIsIlVSTFNlYXJjaFBhcmFtcyIsIkZvcm1EYXRhIiwicmVzcG9uc2UiLCJkaXNwYXRjaCIsIkNvbnRyb2xsZXIiLCJTdHJpbmciLCJzdWJtaXRBc3luYyIsIkJvb2xlYW4iXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTtBQUNBO0FBQ0E7QUFFQTs7Ozs7Ozs7Ozs7Ozs7O1dBVUksbUJBQVU7QUFDTkEsZ0VBQVcsQ0FBQyxJQUFELENBQVg7QUFDSDs7O1dBRUQsa0JBQVNDLEtBQVQsRUFBZ0I7QUFBQTs7QUFDWkEsV0FBSyxDQUFDQyxjQUFOO0FBRUFDLDhEQUFBLENBQVU7QUFDTkMsYUFBSyxFQUFFLEtBQUtDLFVBQUwsSUFBbUIsSUFEcEI7QUFFTkMsWUFBSSxFQUFFLEtBQUtDLFNBQUwsSUFBa0IsSUFGbEI7QUFHTkMsWUFBSSxFQUFFLEtBQUtDLFNBQUwsSUFBa0IsSUFIbEI7QUFJTkMsd0JBQWdCLEVBQUUsSUFKWjtBQUtOQywwQkFBa0IsRUFBRSxTQUxkO0FBTU5DLHlCQUFpQixFQUFFLE1BTmI7QUFPTkMseUJBQWlCLEVBQUUsS0FBS0Msc0JBQUwsSUFBK0IsS0FQNUM7QUFRTkMsMkJBQW1CLEVBQUUsSUFSZjtBQVNOQyxrQkFBVSxFQUFFLHNCQUFNO0FBQ2QsaUJBQU8sS0FBSSxDQUFDQyxVQUFMLEVBQVA7QUFDSDtBQVhLLE9BQVY7QUFhSDs7OztnRkFFRDtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQSxvQkFDUyxLQUFLQyxnQkFEZDtBQUFBO0FBQUE7QUFBQTs7QUFFUSxxQkFBS0MsT0FBTCxDQUFhQyxNQUFiO0FBRlI7O0FBQUE7QUFBQTtBQUFBLHVCQU8yQkMsS0FBSyxDQUFDLEtBQUtGLE9BQUwsQ0FBYUcsTUFBZCxFQUFzQjtBQUM5Q0Msd0JBQU0sRUFBRSxLQUFLSixPQUFMLENBQWFJLE1BRHlCO0FBRTlDQyxzQkFBSSxFQUFFLElBQUlDLGVBQUosQ0FBb0IsSUFBSUMsUUFBSixDQUFhLEtBQUtQLE9BQWxCLENBQXBCO0FBRndDLGlCQUF0QixDQVBoQzs7QUFBQTtBQU9VUSx3QkFQVjtBQVlJLHFCQUFLQyxRQUFMLENBQWMsaUJBQWQsRUFBaUM7QUFDN0JELDBCQUFRLEVBQVJBO0FBRDZCLGlCQUFqQzs7QUFaSjtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQSxPOzs7Ozs7Ozs7OztFQS9CeUJFLGlEOztvQ0FDVDtBQUNaekIsT0FBSyxFQUFFMEIsTUFESztBQUVaeEIsTUFBSSxFQUFFd0IsTUFGTTtBQUdadEIsTUFBSSxFQUFFc0IsTUFITTtBQUlaakIsbUJBQWlCLEVBQUVpQixNQUpQO0FBS1pDLGFBQVcsRUFBRUM7QUFMRCxDIiwiZmlsZSI6ImFzc2V0c19jb250cm9sbGVyc19zdWJtaXQtY29uZmlybV9jb250cm9sbGVyX2pzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IHsgQ29udHJvbGxlciB9IGZyb20gJ3N0aW11bHVzJztcbmltcG9ydCBTd2FsIGZyb20gJ3N3ZWV0YWxlcnQyJztcbmltcG9ydCB7IHVzZURpc3BhdGNoIH0gZnJvbSAnc3RpbXVsdXMtdXNlJztcblxuLyogc3RpbXVsdXNGZXRjaDogJ2xhenknICovXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBleHRlbmRzIENvbnRyb2xsZXIge1xuICAgIHN0YXRpYyB2YWx1ZXMgPSB7XG4gICAgICAgIHRpdGxlOiBTdHJpbmcsXG4gICAgICAgIHRleHQ6IFN0cmluZyxcbiAgICAgICAgaWNvbjogU3RyaW5nLFxuICAgICAgICBjb25maXJtQnV0dG9uVGV4dDogU3RyaW5nLFxuICAgICAgICBzdWJtaXRBc3luYzogQm9vbGVhbixcbiAgICB9XG5cbiAgICBjb25uZWN0KCkge1xuICAgICAgICB1c2VEaXNwYXRjaCh0aGlzKTtcbiAgICB9XG5cbiAgICBvblN1Ym1pdChldmVudCkge1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuXG4gICAgICAgIFN3YWwuZmlyZSh7XG4gICAgICAgICAgICB0aXRsZTogdGhpcy50aXRsZVZhbHVlIHx8IG51bGwsXG4gICAgICAgICAgICB0ZXh0OiB0aGlzLnRleHRWYWx1ZSB8fCBudWxsLFxuICAgICAgICAgICAgaWNvbjogdGhpcy5pY29uVmFsdWUgfHwgbnVsbCxcbiAgICAgICAgICAgIHNob3dDYW5jZWxCdXR0b246IHRydWUsXG4gICAgICAgICAgICBjb25maXJtQnV0dG9uQ29sb3I6ICcjMzA4NWQ2JyxcbiAgICAgICAgICAgIGNhbmNlbEJ1dHRvbkNvbG9yOiAnI2QzMycsXG4gICAgICAgICAgICBjb25maXJtQnV0dG9uVGV4dDogdGhpcy5jb25maXJtQnV0dG9uVGV4dFZhbHVlIHx8ICdZZXMnLFxuICAgICAgICAgICAgc2hvd0xvYWRlck9uQ29uZmlybTogdHJ1ZSxcbiAgICAgICAgICAgIHByZUNvbmZpcm06ICgpID0+IHtcbiAgICAgICAgICAgICAgICByZXR1cm4gdGhpcy5zdWJtaXRGb3JtKCk7XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pO1xuICAgIH1cblxuICAgIGFzeW5jIHN1Ym1pdEZvcm0oKSB7XG4gICAgICAgIGlmICghdGhpcy5zdWJtaXRBc3luY1ZhbHVlKSB7XG4gICAgICAgICAgICB0aGlzLmVsZW1lbnQuc3VibWl0KCk7XG5cbiAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgfVxuXG4gICAgICAgIGNvbnN0IHJlc3BvbnNlID0gYXdhaXQgZmV0Y2godGhpcy5lbGVtZW50LmFjdGlvbiwge1xuICAgICAgICAgICAgbWV0aG9kOiB0aGlzLmVsZW1lbnQubWV0aG9kLFxuICAgICAgICAgICAgYm9keTogbmV3IFVSTFNlYXJjaFBhcmFtcyhuZXcgRm9ybURhdGEodGhpcy5lbGVtZW50KSksXG4gICAgICAgIH0pO1xuXG4gICAgICAgIHRoaXMuZGlzcGF0Y2goJ2FzeW5jOnN1Ym1pdHRlZCcsIHtcbiAgICAgICAgICAgIHJlc3BvbnNlLFxuICAgICAgICB9KVxuICAgIH1cbn1cbiJdLCJzb3VyY2VSb290IjoiIn0=