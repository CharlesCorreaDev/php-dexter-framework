# File Name Handling for... | Forma.Lms Documentation

> **Fonte / Source:** https://docs2.formalms.org/books/reference-guide/page/file-name-handling-for-scorm-packages

---

# File Name Handling for SCORM Packages

> **Feature available from**: FormaLMS **4.1.39** (March 2026) **Subsequent improvement**: FormaLMS **4.1.40**

---

## Why was it introduced

In the past, when uploading SCORM packages or attachments whose names contained **special characters** — accented letters, apostrophes, spaces, parentheses, symbols, or non-Latin characters — the platform could encounter errors in various operations:

- inability to copy a SCORM learning object between different repositories;
- errors during package extraction or playback;
- broken download links;
- inconsistencies between what was recorded in the platform and what was actually stored.

To resolve these issues and ensure consistency across the entire platform, an **automatic file name normalization** system was introduced.

---

## What the platform does

When a user uploads a file (SCORM package, forum attachment, quiz response file, course material), the platform automatically applies a series of transformations to the file name **before saving it**:

1. **Accents are converted to their base letter** Example: `lezione sull'età adulta.zip` becomes `lezione_sulleta_adulta.zip`.
2. **Spaces are replaced with underscores** Example: `Modulo base.zip` becomes `Modulo_base.zip`.
3. **Special characters and punctuation are removed** Apostrophes, parentheses, dots, and various symbols are removed, keeping only letters, numbers, underscores, and hyphens.
4. **Non-Latin characters are stripped out** Ideograms, non-Western alphabets, and emojis are removed. If the file name consists entirely of such characters, the platform automatically assigns a safe fallback name, ensuring the upload never fails.
5. **The file extension is preserved** Users will continue to see the correct extension (`.zip`, `.pdf`, `.docx`, …) to open the file with the appropriate application.

### What this means for the user

- **Uploads are never blocked** due to file name issues.
- **The original name visible to the user** in the platform (learning object title, attachment label) **does not change**: normalization only affects the technical file name used behind the scenes.
- **SCORM packages** with complex names can now be **copied, moved, and reused** across organizational and home repositories without errors.

---

## Where normalization is applied

Normalization is automatically applied in all areas where users can upload files:

- **SCORM packages** uploaded in courses;
- **Forum attachments** (both course forums and public forums);
- **Quiz response files** uploaded by learners;
- **Course and lesson materials**.

---

## What happens to existing packages before the update

Platforms that already had SCORM packages, attachments, or materials with names containing special characters were handled through an **automatic alignment procedure** executed during the update to version 4.1.39.

During this process, the platform:

- **identifies** all files and folders with names containing special characters;
- **renames** each item automatically using the same normalization rules;
- **updates internal references** to maintain consistency between platform records and stored files.

The procedure is designed to be **safe**:

- before any changes, the full list of original file names is saved in the update log, ensuring traceability;
- if a file is missing, it is skipped without consequences;
- if a file with the new name already exists, it is never overwritten;
- internal references are updated only after confirming that renaming was successful.

### Improvement introduced in version 4.1.40

In some scenarios — particularly when the same SCORM package had been **copied multiple times across courses or repositories** — the 4.1.39 alignment process could leave some references out of sync with the already renamed file.

Version 4.1.40 introduces a **corrective step** that automatically detects and fixes these remaining cases, ensuring full alignment between the file system and the platform.

---

## Benefits for the end user

- **Always reliable file uploads**, regardless of the original file name.
- Error-free **copying and reuse of SCORM packages** across courses and repositories.
- **Stable download and playback** across all devices and operating systems.
- Automatically **cleaned historical archive** after the update, with no manual intervention required.
- **Unchanged user experience**: visible titles and descriptions remain the same.

---

## Version summary

| FormaLMS Version | What it introduces |
| --- | --- |
| **4.1.39** | Automatic normalization for new uploads and alignment procedure for existing archives |
| **4.1.40** | Fix for residual misalignment cases in SCORM packages copied multiple times |
| 4.1.41 and 4.1.42 | No changes: feature stabilized |

Entrar em modo de seleção de seção
