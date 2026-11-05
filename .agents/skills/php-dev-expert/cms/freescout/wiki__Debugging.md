# Debugging · freescout-help-desk/freescout Wiki · GitHub

> **Fonte / Source:** https://github.com/freescout-help-desk/freescout/wiki/Debugging

---

If you need to debug some issue you can use the following function:

```
\Log::error('[Debugging] some variable value: '.$some_variable);
```

After that you can find the output in "Manage > Logs > App Logs" ("laravel...log"). Keep in mind that sometimes in order your debugging code to be executed you need to [clear cache](wiki__Clearing-the-Cache.md) to refresh background jobs code.
