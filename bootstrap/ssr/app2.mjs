import loadash from "lodash";
import * as Popper from "@popperjs/core";
import "bootstrap";
import axios from "axios";
import { useSSRContext, mergeProps, resolveComponent, withCtx, createTextVNode, createApp } from "vue";
import { createRouter, createWebHistory } from "vue-router";
import { ssrRenderAttrs, ssrRenderComponent } from "vue/server-renderer";
window._ = loadash;
window.Popper = Popper;
window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
const app$1 = "";
const _export_sfc = (sfc, props) => {
  const target = sfc.__vccOpts || sfc;
  for (const [key, val] of props) {
    target[key] = val;
  }
  return target;
};
const _sfc_main$3 = {
  name: "HomePage"
};
function _sfc_ssrRender$3(_ctx, _push, _parent, _attrs, $props, $setup, $data, $options) {
  _push(`<div${ssrRenderAttrs(_attrs)}>HomePage</div>`);
}
const _sfc_setup$3 = _sfc_main$3.setup;
_sfc_main$3.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/components/HomePage.vue");
  return _sfc_setup$3 ? _sfc_setup$3(props, ctx) : void 0;
};
const Home = /* @__PURE__ */ _export_sfc(_sfc_main$3, [["ssrRender", _sfc_ssrRender$3]]);
const _sfc_main$2 = {
  name: "Login"
};
function _sfc_ssrRender$2(_ctx, _push, _parent, _attrs, $props, $setup, $data, $options) {
  _push(`<div${ssrRenderAttrs(mergeProps({ class: "w-25" }, _attrs))}><input type="email" class="form-control mt-3 mb-3" placeholder="email"><input type="password" class="form-control mb-3" placeholder="password"><input type="submit" class="btn btn-primary"></div>`);
}
const _sfc_setup$2 = _sfc_main$2.setup;
_sfc_main$2.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/components/User/Login.vue");
  return _sfc_setup$2 ? _sfc_setup$2(props, ctx) : void 0;
};
const Login = /* @__PURE__ */ _export_sfc(_sfc_main$2, [["ssrRender", _sfc_ssrRender$2]]);
const _sfc_main$1 = {
  name: "Registration"
};
function _sfc_ssrRender$1(_ctx, _push, _parent, _attrs, $props, $setup, $data, $options) {
  _push(`<div${ssrRenderAttrs(_attrs)}><div class="w-25"><input type="text" class="form-control" placeholder="name"><input type="email" class="form-control" placeholder="email"><input type="password" class="form-control" placeholder="password"><input type="password" class="form-control" placeholder="confirm password"><input type="submit" class="btn btn-primary"></div></div>`);
}
const _sfc_setup$1 = _sfc_main$1.setup;
_sfc_main$1.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/components/User/Registration.vue");
  return _sfc_setup$1 ? _sfc_setup$1(props, ctx) : void 0;
};
const Registration = /* @__PURE__ */ _export_sfc(_sfc_main$1, [["ssrRender", _sfc_ssrRender$1]]);
const routes = [
  { path: "/", name: "home", component: Home },
  { path: "/login", name: "login", component: Login },
  { path: "/reg", name: "registration", component: Registration }
];
const router = createRouter({
  history: createWebHistory(),
  routes
});
const _sfc_main = {
  setup() {
  },
  mounted() {
  }
};
function _sfc_ssrRender(_ctx, _push, _parent, _attrs, $props, $setup, $data, $options) {
  const _component_router_link = resolveComponent("router-link");
  _push(`<div${ssrRenderAttrs(_attrs)}><nav class="flex flex-wrap">`);
  _push(ssrRenderComponent(_component_router_link, { to: { name: "home" } }, {
    default: withCtx((_, _push2, _parent2, _scopeId) => {
      if (_push2) {
        _push2(`\u0413\u043B\u0430\u0432\u043D\u0430\u044F`);
      } else {
        return [
          createTextVNode("\u0413\u043B\u0430\u0432\u043D\u0430\u044F")
        ];
      }
    }),
    _: 1
  }, _parent));
  _push(ssrRenderComponent(_component_router_link, { to: { name: "login" } }, {
    default: withCtx((_, _push2, _parent2, _scopeId) => {
      if (_push2) {
        _push2(`login`);
      } else {
        return [
          createTextVNode("login")
        ];
      }
    }),
    _: 1
  }, _parent));
  _push(ssrRenderComponent(_component_router_link, { to: { name: "registration" } }, {
    default: withCtx((_, _push2, _parent2, _scopeId) => {
      if (_push2) {
        _push2(`Registration`);
      } else {
        return [
          createTextVNode("Registration")
        ];
      }
    }),
    _: 1
  }, _parent));
  _push(`</nav></div>`);
}
const _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
  const ssrContext = useSSRContext();
  (ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/components/App.vue");
  return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
const App = /* @__PURE__ */ _export_sfc(_sfc_main, [["ssrRender", _sfc_ssrRender]]);
const app = createApp(App);
app.use(router);
app.mount("#app");
