# Wall of browser bugs · Bootstrap

> **Fonte / Source:** https://getbootstrap.com/docs/3.4/browser-bugs/

---

# Browser bugs

Bootstrap currently works around several outstanding browser bugs in major browsers to deliver the best cross-browser experience possible. Some bugs, like those listed below, cannot be solved by us.

We publicly list browser bugs that are impacting us here, in the hopes of expediting the process of fixing them. For information on Bootstrap's browser compatibility, [see our browser compatibility docs](getting-started.md#support).

See also:

- [Chromium issue 536263: [meta] Issues affecting Bootstrap](https://bugs.chromium.org/p/chromium/issues/detail?id=536263)
- [Mozilla bug 1230801: Fix the issues that affect Bootstrap](https://bugzilla.mozilla.org/show_bug.cgi?id=1230801)
- [WebKit bug 159753: [meta] Issues affecting Bootstrap](https://bugs.webkit.org/show_bug.cgi?id=159753)
- [jQuery's browser bug workarounds](https://docs.google.com/document/d/1LPaPA30bLUB_publLIMF0RlhdnPx_ePXm7oW02iiT6o)

| Browser(s) | Summary of bug | Upstream bug(s) | Bootstrap issue(s) |
| --- | --- | --- | --- |
| Microsoft Edge | Visual artifacts in scrollable modal dialogs | [Edge issue #9011176](https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/9011176/) | [#20755](https://github.com/twbs/bootstrap/issues/20755) |
| Microsoft Edge | Native browser tooltip for `title` shows on first keyboard focus (in addition to custom tooltip component) | [Edge issue #6793560](https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/6793560/) | [#18692](https://github.com/twbs/bootstrap/issues/18692) |
| Microsoft Edge | Hovered element still remains in `:hover` state after scrolling away. | [Edge issue #5381673](https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/5381673/) | [#14211](https://github.com/twbs/bootstrap/issues/14211) |
| Microsoft Edge | When hovering over a `<select>` menu item, the cursor for the element underneath the menu is displayed. | [Edge issue #817822](https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/817822/) | [#14528](https://github.com/twbs/bootstrap/issues/14528) |
| Microsoft Edge | CSS `border-radius` sometimes causes lines of bleed-through of the `background-color` of the parent element. | [Edge issue #3342037](https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/3342037/) | [#16671](https://github.com/twbs/bootstrap/issues/16671) |
| Microsoft Edge | `background` of `<tr>` is only applied to first child cell instead of all cells in the row | [Edge issue #5865620](https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/5865620/) | [#18504](https://github.com/twbs/bootstrap/issues/18504) |
| Microsoft Edge | `@-ms-viewport{width: device-width;}` has side-effect of making scrollbars auto-hide | [Edge issue #7165383](https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/7165383/) | [#18543](https://github.com/twbs/bootstrap/issues/18543) |
| Microsoft Edge | Background color from lower layer bleeds through transparent border in some cases | [Edge issue #6274505](https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/6274505/) | [#18228](https://github.com/twbs/bootstrap/issues/18228) |
| Microsoft Edge | Hovering over descendant SVG element fires `mouseleave` event at ancestor | [Edge issue #7787318](https://developer.microsoft.com/en-us/microsoft-edge/platform/issues/7787318/) | [#19670](https://github.com/twbs/bootstrap/issues/19670) |
| Firefox | `.table-bordered` with an empty `<tbody>` is missing borders. | [Mozilla bug #1023761](https://bugzilla.mozilla.org/show_bug.cgi?id=1023761) | [#13453](https://github.com/twbs/bootstrap/issues/13453) |
| Firefox | If the disabled state of a form control is changed via JavaScript, the normal state doesn’t return after refreshing the page. | [Mozilla bug #654072](https://bugzilla.mozilla.org/show_bug.cgi?id=654072) | [#793](https://github.com/twbs/bootstrap/issues/793) |
| Firefox | `focus` events should not be fired at the `document` object | [Mozilla bug #1228802](https://bugzilla.mozilla.org/show_bug.cgi?id=1228802) | [#18365](https://github.com/twbs/bootstrap/issues/18365) |
| Firefox | Wide floated table doesn’t wrap onto new line | [Mozilla bug #1277782](https://bugzilla.mozilla.org/show_bug.cgi?id=1277782) | [#19839](https://github.com/twbs/bootstrap/issues/19839) |
| Firefox | Mouse sometimes not within element for purposes of `mouseenter`/`mouseleave` when it’s within SVG elements | [Mozilla bug #577785](https://bugzilla.mozilla.org/show_bug.cgi?id=577785) | [#19670](https://github.com/twbs/bootstrap/issues/19670) |
| Firefox | `position: absolute` element that’s wider than its column renders differently than other browsers | [Mozilla bug #1282363](https://bugzilla.mozilla.org/show_bug.cgi?id=1282363) | [#20161](https://github.com/twbs/bootstrap/issues/20161) |
| Firefox (Windows) | Right border of `<select>` menu is sometimes missing when screen is set to uncommon resolution | [Mozilla bug #545685](https://bugzilla.mozilla.org/show_bug.cgi?id=545685) | [#15990](https://github.com/twbs/bootstrap/issues/15990) |
| Firefox (OS X & Linux) | Badge widget causes bottom border of Tabs widget to unexpectedly not overlap | [Mozilla bug #1259972](https://bugzilla.mozilla.org/show_bug.cgi?id=1259972) | [#19626](https://github.com/twbs/bootstrap/issues/19626) |
| Chrome (Android) | Tapping on an `<input>` in a scrollable overlay doesn’t scroll the `<input>` into view | [Chromium issue #595210](https://bugs.chromium.org/p/chromium/issues/detail?id=595210) | [#17338](https://github.com/twbs/bootstrap/issues/17338) |
| Chrome (OS X) | Clicking above `<input type="number">` increment button flashes the decrement button. | [Chromium issue #419108](https://bugs.chromium.org/p/chromium/issues/detail?id=419108) | Offshoot of [#8350](https://github.com/twbs/bootstrap/issues/8350) & [Chromium issue #337668](https://bugs.chromium.org/p/chromium/issues/detail?id=337668) |
| Chrome | CSS infinite linear animation with alpha transparency leaks memory. | [Chromium issue #429375](https://bugs.chromium.org/p/chromium/issues/detail?id=429375) | [#14409](https://github.com/twbs/bootstrap/issues/14409) |
| Chrome | `:focus` `outline` style causes cursor to not be displayed when toggling a `readonly` `<input>` to read-write. | [Chromium issue #465274](https://bugs.chromium.org/p/chromium/issues/detail?id=465274) | [#16022](https://github.com/twbs/bootstrap/issues/16022) |
| Chrome | `table-cell` borders not overlapping despite `margin-right: -1px` | [Chromium issue #534750](https://bugs.chromium.org/p/chromium/issues/detail?id=534750) | [#17438](https://github.com/twbs/bootstrap/issues/17438), [#14237](https://github.com/twbs/bootstrap/issues/14237) |
| Chrome | Clicking scrollbar in `<select multiple>` with overflowed options will select nearby `<option>` | [Chromium issue #597642](https://bugs.chromium.org/p/chromium/issues/detail?id=597642) | [#19810](https://github.com/twbs/bootstrap/issues/19810) |
| Chrome | Don’t make `:hover` sticky on touch-friendly webpages | [Chromium issue #370155](https://bugs.chromium.org/p/chromium/issues/detail?id=370155) | [#12832](https://github.com/twbs/bootstrap/issues/12832) |
| Chrome (Windows & Linux) | Animation glitch when returning to inactive tab after animations occurred while tab was hidden. | [Chromium issue #449180](https://bugs.chromium.org/p/chromium/issues/detail?id=449180) | [#15298](https://github.com/twbs/bootstrap/issues/15298) |
| Safari | `rem` units in media queries should be calculated using `font-size: initial`, not the root element’s `font-size` | [WebKit bug #156684](https://bugs.webkit.org/show_bug.cgi?id=156684) | [#17403](https://github.com/twbs/bootstrap/issues/17403) |
| Safari (OS X) | `px`, `em`, and `rem` should all behave the same in media queries when page zoom is applied | [WebKit bug #156687](https://bugs.webkit.org/show_bug.cgi?id=156687) | [#17403](https://github.com/twbs/bootstrap/issues/17403) |
| Safari (OS X) | Weird button behavior with some `<input type="number">` elements. | [WebKit bug #137269](https://bugs.webkit.org/show_bug.cgi?id=137269), [Apple Safari Radar #18834768](https://openradar.appspot.com/18834768) | [#8350](https://github.com/twbs/bootstrap/issues/8350), [Normalize #283](https://github.com/necolas/normalize.css/issues/283), [Chromium issue #337668](https://bugs.chromium.org/p/chromium/issues/detail?id=337668) |
| Safari (OS X) | Small font size when printing webpage with fixed-width `.container`. | [WebKit bug #138192](https://bugs.webkit.org/show_bug.cgi?id=138192), [Apple Safari Radar #19435018](https://openradar.appspot.com/19435018) | [#14868](https://github.com/twbs/bootstrap/issues/14868) |
| Safari (iPad) | `<select>` menu on iPad causes shifting of hit-testing areas | [WebKit bug #150079](https://bugs.webkit.org/show_bug.cgi?id=150079), [Apple Safari Radar #23082521](https://openradar.appspot.com/23082521) | [#14975](https://github.com/twbs/bootstrap/issues/14975) |
| Safari (iOS) | `transform: translate3d(0,0,0);` rendering bug. | [WebKit bug #138162](https://bugs.webkit.org/show_bug.cgi?id=138162), [Apple Safari Radar #18804973](https://openradar.appspot.com/18804973) | [#14603](https://github.com/twbs/bootstrap/issues/14603) |
| Safari (iOS) | Text input’s cursor doesn’t move while scrolling the page. | [WebKit bug #138201](https://bugs.webkit.org/show_bug.cgi?id=138201), [Apple Safari Radar #18819624](https://openradar.appspot.com/18819624) | [#14708](https://github.com/twbs/bootstrap/issues/14708) |
| Safari (iOS) | Can’t move cursor to start of text after entering long string of text into `<input type="text">` | [WebKit bug #148061](https://bugs.webkit.org/show_bug.cgi?id=148061), [Apple Safari Radar #22299624](https://openradar.appspot.com/22299624) | [#16988](https://github.com/twbs/bootstrap/issues/16988) |
| Safari (iOS) | `display: block` causes text of temporal `<input>`s to become vertically misaligned | [WebKit bug #139848](https://bugs.webkit.org/show_bug.cgi?id=139848), [Apple Safari Radar #19434878](https://openradar.appspot.com/19434878) | [#11266](https://github.com/twbs/bootstrap/issues/11266), [#13098](https://github.com/twbs/bootstrap/issues/13098) |
| Safari (iOS) | Tapping on `<body>` doesn’t fire `click` events | [WebKit bug #151933](https://bugs.webkit.org/show_bug.cgi?id=151933) | [#16028](https://github.com/twbs/bootstrap/issues/16028) |
| Safari (iOS) | `position:fixed` is incorrectly positioned when tab bar is visible on iPhone 6S+ Safari | [WebKit bug #153056](https://bugs.webkit.org/show_bug.cgi?id=153056) | [#18859](https://github.com/twbs/bootstrap/issues/18859) |
| Safari (iOS) | Tapping into an `<input>` within a `position:fixed` element scrolls to the top of the page | [WebKit bug #153224](https://bugs.webkit.org/show_bug.cgi?id=153224), [Apple Safari Radar #24235301](https://openradar.appspot.com/24235301) | [#17497](https://github.com/twbs/bootstrap/issues/17497) |
| Safari (iOS) | `<body>` with `overflow:hidden` CSS is scrollable on iOS | [WebKit bug #153852](https://bugs.webkit.org/show_bug.cgi?id=153852) | [#14839](https://github.com/twbs/bootstrap/issues/14839) |
| Safari (iOS) | Scroll gesture in text field in `position:fixed` element sometimes scrolls `<body>` instead of scrollable ancestor | [WebKit bug #153856](https://bugs.webkit.org/show_bug.cgi?id=153856) | [#14839](https://github.com/twbs/bootstrap/issues/14839) |
| Safari (iOS) | Tapping from one `<input>` to another in an overlay can cause shaking/jiggling effect | [WebKit bug #158276](https://bugs.webkit.org/show_bug.cgi?id=158276) | [#19927](https://github.com/twbs/bootstrap/issues/19927) |
| Safari (iOS) | Modal with `-webkit-overflow-scrolling: touch` doesn’t become scrollable after added text makes it taller | [WebKit bug #158342](https://bugs.webkit.org/show_bug.cgi?id=158342) | [#17695](https://github.com/twbs/bootstrap/issues/17695) |
| Safari (iOS) | Don’t make `:hover` sticky on touch-friendly webpages | [WebKit bug #158517](https://bugs.webkit.org/show_bug.cgi?id=158517) | [#12832](https://github.com/twbs/bootstrap/issues/12832) |
| Safari (iPad Pro) | Rendering of descendants of `position: fixed` element gets clipped on iPad Pro in Landscape orientation | [WebKit bug #152637](https://bugs.webkit.org/show_bug.cgi?id=152637), [Apple Safari Radar #24030853](https://openradar.appspot.com/24030853) | [#18738](https://github.com/twbs/bootstrap/issues/18738) |

# Most wanted features

There are several features specified in Web standards which would allow us to make Bootstrap more robust, elegant, or performant, but aren't yet implemented in certain browsers, thus preventing us from taking advantage of them.

We publicly list these "most wanted" feature requests here, in the hopes of expediting the process of getting them implemented.

| Browser(s) | Summary of feature | Upstream issue(s) | Bootstrap issue(s) |
| --- | --- | --- | --- |
| Microsoft Edge | Implement the [`:dir()` pseudo-class](https://developer.mozilla.org/en-US/docs/Web/CSS/:dir) from Selectors Level 4 | [Edge UserVoice idea #12299532](https://wpdev.uservoice.com/forums/257854-microsoft-edge-developer/suggestions/12299532) | [#19984](https://github.com/twbs/bootstrap/issues/19984) |
| Microsoft Edge | Implement [sticky positioning](http://html5please.com/#position:sticky) from CSS Positioned Layout Level 3 | [Edge UserVoice idea #6263621](https://wpdev.uservoice.com/forums/257854-microsoft-edge-developer/suggestions/6263621) | [#17021](https://github.com/twbs/bootstrap/issues/17021) |
| Microsoft Edge | Implement the HTML5 [`<dialog>` element](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog) | [Edge UserVoice idea #6508895](https://wpdev.uservoice.com/forums/257854-microsoft-edge-developer/suggestions/6508895) | [#20175](https://github.com/twbs/bootstrap/issues/20175) |
| Firefox | Fire a [`transitioncancel` event](https://developer.mozilla.org/en-US/docs/Web/Events/transitioncancel) when a CSS transition is canceled | [Mozilla bug #1264125](https://bugzilla.mozilla.org/show_bug.cgi?id=1264125) | [Mozilla bug #1182856](https://bugzilla.mozilla.org/show_bug.cgi?id=1182856) |
| Firefox | Implement the [`of <selector-list>` clause](https://caniuse.com/#feat=css-nth-child-of) of the `:nth-child()` pseudo-class | [Mozilla bug #854148](https://bugzilla.mozilla.org/show_bug.cgi?id=854148) | [#20143](https://github.com/twbs/bootstrap/issues/20143) |
| Firefox | Implement the HTML5 [`<dialog>` element](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog) | [Mozilla bug #840640](https://bugzilla.mozilla.org/show_bug.cgi?id=840640) | [#20175](https://github.com/twbs/bootstrap/issues/20175) |
| Chrome | Implement the [`of <selector-list>` clause](https://caniuse.com/#feat=css-nth-child-of) of the `:nth-child()` pseudo-class | [Chromium issue #304163](https://bugs.chromium.org/p/chromium/issues/detail?id=304163) | [#20143](https://github.com/twbs/bootstrap/issues/20143) |
| Chrome | Implement the [`:dir()` pseudo-class](https://developer.mozilla.org/en-US/docs/Web/CSS/:dir) from Selectors Level 4 | [Chromium issue #576815](https://bugs.chromium.org/p/chromium/issues/detail?id=576815) | [#19984](https://github.com/twbs/bootstrap/issues/19984) |
| Chrome | Implement [sticky positioning](http://html5please.com/#position:sticky) from CSS Positioned Layout Level 3 | [Chromium issue #231752](https://bugs.chromium.org/p/chromium/issues/detail?id=231752) | [#17021](https://github.com/twbs/bootstrap/issues/17021) |
| Safari | Implement the [`:dir()` pseudo-class](https://developer.mozilla.org/en-US/docs/Web/CSS/:dir) from Selectors Level 4 | [WebKit bug #64861](https://bugs.webkit.org/show_bug.cgi?id=64861) | [#19984](https://github.com/twbs/bootstrap/issues/19984) |
| Safari | Implement the HTML5 [`<dialog>` element](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog) | [WebKit bug #84635](https://bugs.webkit.org/show_bug.cgi?id=84635) | [#20175](https://github.com/twbs/bootstrap/issues/20175) |
