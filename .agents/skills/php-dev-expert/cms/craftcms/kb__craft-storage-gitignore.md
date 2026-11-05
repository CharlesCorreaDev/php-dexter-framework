# Determining Which Folders in craft/storage to Add to… | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/craft-storage-gitignore

---

Search Knowledge Base

# Determining Which Folders in craft/​storage to Add to .gitignore

![](https://craftcms.com/dist/images/icon-tip.svg)

This article was originally written for Craft 2. Projects on Craft 3 and later can safely use the [default `storage/.gitignore`](https://github.com/craftcms/craft/blob/5.x/storage/.gitignore) file as a starting point. An [updated description](https://craftcms.com/docs/5.x/system/directory-structure.html) of the contents of the storage directory is available in the documentation.

There’s [a lot going on](https://docs.craftcms.com/v2/folder-structure.html#craft-storage) within your `craft/storage/` folder. Let’s go through it all one-by-one and figure out what, if any, would be missed if it went missing, versus what can safely be `.gitignore`’d.

### craft/storage/backups/ [#](#craft-storage-backups "Direct link to craft/storage/backups/")

Keeping database backups is important, but unless you are planning on keeping everyone’s databases in sync, there’s probably not a whole lot of reason why you’d want to store them in version control.

**Verdict:** *Ignore*

### craft/storage/rebrand/ [#](#craft-storage-rebrand "Direct link to craft/storage/rebrand/")

If you’re running Craft Pro and you’ve uploaded a custom Login Page Logo or Site Icon, this is where those files will be stored. There’s no corresponding database value to worry about either.

**Verdict:** *Don’t ignore*

### craft/storage/runtime/ [#](#craft-storage-runtime "Direct link to craft/storage/runtime/")

Everything in this folder can be recreated in a pinch, and much of it is constantly being regenerated anyway. There’s no compelling reason to keep any of it in version control, and there are good reasons not to. In fact, Craft actually *creates* a .gitignore file within craft/storage/runtime/ for you, telling Git to ignore everything in the folder but itself (the .gitignore file). So you don’t really have to worry about this one.

**Verdict:** *Ignore*

### craft/storage/userphotos/ [#](#craft-storage-userphotos "Direct link to craft/storage/userphotos/")

It might seem like a no-brainer that user photos should get added to version control, but keep in mind that when a user uploads a photo, the file is saved in this folder *and* its filename is saved to the user’s row in the database’s ‘users’ table. So unless you have a way to keep the databases in sync between servers, there’s not a whole lot of point to sharing these files. You might be better off keeping them out of version control, and just manually FTP’ing this folder over to the new server when you’re first setting it up.

**Verdict:** *Ignore*

## Summary [#](#summary "Direct link to Summary")

At the end of the day, the only folder that really might be worth putting in version control is craft/storage/rebrand. And that’s assuming you have Craft Pro. Otherwise, you might as well just .gitignore the craft/storage/ folder as a whole, and call it a day.

Applies to
Craft CMS 5, Craft CMS 4, Craft CMS 3, and Craft CMS 2.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
