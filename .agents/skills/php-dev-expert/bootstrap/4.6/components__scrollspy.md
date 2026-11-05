# Scrollspy · Bootstrap v4.6

> **Fonte / Source:** https://getbootstrap.com/docs/4.6/components/scrollspy/

---

[View on GitHub](https://github.com/twbs/bootstrap/blob/v4.6.2/site/content/docs/4.6/components/scrollspy.md "View and edit this file on GitHub")

# Scrollspy

Automatically update Bootstrap navigation or list group components based on scroll position to indicate which link is currently active in the viewport.

## How it works

Scrollspy has a few requirements to function properly:

- If you’re building our JavaScript from source, it [requires `util.js`](getting-started__javascript.md#util).
- It must be used on a Bootstrap [nav component](components__navs.md) or [list group](components__list-group.md).
- Scrollspy requires `position: relative;` on the element you’re spying on, usually the `<body>`.
- When spying on elements other than the `<body>`, be sure to have a `height` set and `overflow-y: scroll;` applied.
- Anchors (`<a>`) are required and must point to an element with that `id`.

When successfully implemented, your nav or list group will update accordingly, moving the `.active` class from one item to the next based on their associated targets.

## Example in navbar

Scroll the area below the navbar and watch the active class change. The dropdown items will be highlighted as well.

#### @fat

Placeholder content for the scrollspy example. You got the finest architecture. Passport stamps, she's cosmopolitan. Fine, fresh, fierce, we got it on lock. Never planned that one day I'd be losing you. She eats your heart out. Your kiss is cosmic, every move is magic. I mean the ones, I mean like she's the one. Greetings loved ones let's take a journey. Just own the night like the 4th of July! But you'd rather get wasted.

#### @mdo

Placeholder content for the scrollspy example. 'Cause she's the muse and the artist. (This is how we do) So you wanna play with magic. So just be sure before you give it all to me. I'm walking, I'm walking on air (tonight). Skip the talk, heard it all, time to walk the walk.

#### one

Placeholder content for the scrollspy example. Takes you miles high, so high, 'cause she’s got that one international smile. There's a stranger in my bed, there's a pounding in my head. Oh, no. In another life I would make you stay. ‘Cause I, I’m capable of anything. Suiting up for my crowning battle. Used to steal your parents' liquor and climb to the roof. Tone, tan fit and ready, turn it up cause its gettin' heavy. Her love is like a drug. I guess that I forgot I had a choice.

#### two

Placeholder content for the scrollspy example. It's time to bring out the big balloons. I'm walking, I'm walking on air (tonight). Yeah, we maxed our credit cards and got kicked out of the bar. Yo, shout out to all you kids, buying bottle service, with your rent money. I'm ma get your heart racing in my skin-tight jeans. If you get the chance you better keep her. Yo, shout out to all you kids, buying bottle service, with your rent money.

#### three

Placeholder content for the scrollspy example. If you wanna dance, if you want it all, you know that I'm the girl that you should call. Walk through the storm I would. So let me get you in your birthday suit. The one that got away. Last Friday night, yeah I think we broke the law, always say we're gonna stop. 'Cause she's a little bit of Yoko, And she's a little bit of 'Oh no'. I want the jaw droppin', eye poppin', head turnin', body shockin'. Yeah, we maxed our credit cards and got kicked out of the bar.

And some more placeholder content, for good measure.

```
<nav id="navbar-example2" class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#fat">@fat</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#mdo">@mdo</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#one">one</a>
        <a class="dropdown-item" href="#two">two</a>
        <div role="separator" class="dropdown-divider"></div>
        <a class="dropdown-item" href="#three">three</a>
      </div>
    </li>
  </ul>
</nav>
<div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
  <h4 id="fat">@fat</h4>
  <p>...</p>
  <h4 id="mdo">@mdo</h4>
  <p>...</p>
  <h4 id="one">one</h4>
  <p>...</p>
  <h4 id="two">two</h4>
  <p>...</p>
  <h4 id="three">three</h4>
  <p>...</p>
</div>
```

## Example with nested nav

Scrollspy also works with nested `.nav`s. If a nested `.nav` is `.active`, its parents will also be `.active`. Scroll the area next to the navbar and watch the active class change.

#### Item 1

Placeholder content for the scrollspy example. This one relates to item 1. Takes you miles high, so high, 'cause she’s got that one international smile. There's a stranger in my bed, there's a pounding in my head. Oh, no. In another life I would make you stay. ‘Cause I, I’m capable of anything. Suiting up for my crowning battle. Used to steal your parents' liquor and climb to the roof. Tone, tan fit and ready, turn it up cause its gettin' heavy. Her love is like a drug. I guess that I forgot I had a choice.

##### Item 1-1

Placeholder content for the scrollspy example. This one relates to the item 1-1. You got the finest architecture. Passport stamps, she's cosmopolitan. Fine, fresh, fierce, we got it on lock. Never planned that one day I'd be losing you. She eats your heart out. Your kiss is cosmic, every move is magic. I mean the ones, I mean like she's the one. Greetings loved ones let's take a journey. Just own the night like the 4th of July! But you'd rather get wasted.

##### Item 1-2

Placeholder content for the scrollspy example. This one relates to the item 1-2. Her love is like a drug. All my girls vintage Chanel baby. Got a motel and built a fort out of sheets. 'Cause she's the muse and the artist. (This is how we do) So you wanna play with magic. So just be sure before you give it all to me. I'm walking, I'm walking on air (tonight). Skip the talk, heard it all, time to walk the walk. Catch her if you can. Stinging like a bee I earned my stripes.

#### Item 2

Placeholder content for the scrollspy example. This one relates to item 2. Don't need apologies. There is no fear now, let go and just be free, I will love you unconditionally. Last Friday night. Don't be a shy kinda guy I'll bet it's beautiful. Summer after high school when we first met. 'Cause she's the muse and the artist. What? Wait. No, no, no, no. Thought that I was the exception.

#### Item 3

Placeholder content for the scrollspy example. This one relates to item 3. Word on the street, you got somethin' to show me, me. All this money can't buy me a time machine. Make it like your birthday everyday. So we hit the boulevard. You make me feel like I'm livin' a teenage dream, the way you turn me on Skip the talk, heard it all, time to walk the walk. Word on the street, you got somethin' to show me, me. It's no big deal, it's no big deal, it's no big deal.

##### Item 3-1

Placeholder content for the scrollspy example. This one relates to item 3-1. Baby do you dare to do this? This is no big deal. Yeah, you're lucky if you're on her plane. Just own the night like the 4th of July! Standing on the frontline when the bombs start to fall. So just be sure before you give it all to me.

##### Item 3-2

Placeholder content for the scrollspy example. This one relates to item 3-2. You're original, cannot be replaced. All night they're playing, your song. California girls we're undeniable. Like a bird without a cage. There is no fear now, let go and just be free, I will love you unconditionally. I can see the writing on the wall. You could travel the world but nothing comes close to the golden coast.

```
<nav id="navbar-example3" class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <nav class="nav nav-pills flex-column">
    <a class="nav-link" href="#item-1">Item 1</a>
    <nav class="nav nav-pills flex-column">
      <a class="nav-link ml-3 my-1" href="#item-1-1">Item 1-1</a>
      <a class="nav-link ml-3 my-1" href="#item-1-2">Item 1-2</a>
    </nav>
    <a class="nav-link" href="#item-2">Item 2</a>
    <a class="nav-link" href="#item-3">Item 3</a>
    <nav class="nav nav-pills flex-column">
      <a class="nav-link ml-3 my-1" href="#item-3-1">Item 3-1</a>
      <a class="nav-link ml-3 my-1" href="#item-3-2">Item 3-2</a>
    </nav>
  </nav>
</nav>

<div data-spy="scroll" data-target="#navbar-example3" data-offset="0">
  <h4 id="item-1">Item 1</h4>
  <p>...</p>
  <h5 id="item-1-1">Item 1-1</h5>
  <p>...</p>
  <h5 id="item-1-2">Item 1-2</h5>
  <p>...</p>
  <h4 id="item-2">Item 2</h4>
  <p>...</p>
  <h4 id="item-3">Item 3</h4>
  <p>...</p>
  <h5 id="item-3-1">Item 3-1</h5>
  <p>...</p>
  <h5 id="item-3-2">Item 3-2</h5>
  <p>...</p>
</div>
```

## Example with list-group

Scrollspy also works with `.list-group`s. Scroll the area next to the list group and watch the active class change.

[Item 1](#list-item-1)
[Item 2](#list-item-2)
[Item 3](#list-item-3)
[Item 4](#list-item-4)

#### Item 1

Placeholder content for the scrollspy list-group example. This one relates to item 1. Don't need apologies. There is no fear now, let go and just be free, I will love you unconditionally. Last Friday night. Don't be a shy kinda guy I'll bet it's beautiful. Summer after high school when we first met. 'Cause she's the muse and the artist. What? Wait. Thought that I was the exception.

#### Item 2

Placeholder content for the scrollspy list-group example. This one relates to item 2. Yeah, she dances to her own beat. Oh, no. You could've been the greatest. 'Cause, baby, you're a firework. Maybe a reason why all the doors are closed. Open up your heart and just let it begin. So très chic, yeah, she's a classic.

#### Item 3

Placeholder content for the scrollspy list-group example. This one relates to item 3. We go higher and higher. Never one without the other, we made a pact. I'm walking on air. Someone said you had your tattoo removed. Now I’m floating like a butterfly. Tone, tan fit and ready, turn it up cause its gettin' heavy. Cause once you’re mine, once you’re mine. You just gotta ignite the light and let it shine! So we hit the boulevard. Do you ever feel, feel so paper thin. I see it all, I see it now.

#### Item 4

Placeholder content for the scrollspy list-group example. This one relates to item 4. Summer after high school when we first met. There is no fear now, let go and just be free, I will love you unconditionally. Sun-kissed skin so hot we'll melt your popsicle. This love will make you levitate.

```
<div id="list-example" class="list-group">
  <a class="list-group-item list-group-item-action" href="#list-item-1">Item 1</a>
  <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
  <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
  <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
</div>
<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
  <h4 id="list-item-1">Item 1</h4>
  <p>...</p>
  <h4 id="list-item-2">Item 2</h4>
  <p>...</p>
  <h4 id="list-item-3">Item 3</h4>
  <p>...</p>
  <h4 id="list-item-4">Item 4</h4>
  <p>...</p>
</div>
```

## Usage

### Via data attributes

To easily add scrollspy behavior to your topbar navigation, add `data-spy="scroll"` to the element you want to spy on (most typically this would be the `<body>`). Then add the `data-target` attribute with the ID or class of the parent element of any Bootstrap `.nav` component.

```
body {
  position: relative;
}
```

```
<body data-spy="scroll" data-target="#navbar-example">
  ...
  <div id="navbar-example">
    <ul class="nav nav-tabs" role="tablist">
      ...
    </ul>
  </div>
  ...
</body>
```

### Via JavaScript

After adding `position: relative;` in your CSS, call the scrollspy via JavaScript:

```
$('body').scrollspy({ target: '#navbar-example' })
```

#### Resolvable ID targets required

Navbar links must have resolvable id targets. For example, a `<a href="#home">home</a>` must correspond to something in the DOM like `<div id="home"></div>`.

#### Non-`:visible` target elements ignored

Target elements that are not [`:visible` according to jQuery](https://api.jquery.com/visible-selector/) will be ignored and their corresponding nav items will never be highlighted.

### Methods

#### `.scrollspy('refresh')`

When using scrollspy in conjunction with adding or removing of elements from the DOM, you’ll need to call the refresh method like so:

```
$('[data-spy="scroll"]').each(function () {
  var $spy = $(this).scrollspy('refresh')
})
```

#### `.scrollspy('dispose')`

Destroys an element’s scrollspy.

### Options

Options can be passed via data attributes or JavaScript. For data attributes, append the option name to `data-`, as in `data-offset=""`.

| Name | Type | Default | Description |
| --- | --- | --- | --- |
| offset | number | 10 | Pixels to offset from top when calculating position of scroll. |
| method | string | auto | Finds which section the spied element is in. `auto` will choose the best method to get scroll coordinates. `offset` will use jQuery offset method to get scroll coordinates. `position` will use jQuery position method to get scroll coordinates. |
| target | string | jQuery object | DOM element |  | Specifies element to apply Scrollspy plugin. |

### Events

| Event Type | Description |
| --- | --- |
| activate.bs.scrollspy | This event fires on the scroll element whenever a new item becomes activated by the scrollspy. |

```
$('[data-spy="scroll"]').on('activate.bs.scrollspy', function () {
  // do something...
})
```
