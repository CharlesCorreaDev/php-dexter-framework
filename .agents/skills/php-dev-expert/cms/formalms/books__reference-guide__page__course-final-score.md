# Course Final Score | Forma.Lms Documentation

> **Fonte / Source:** https://docs2.formalms.org/books/reference-guide/page/course-final-score

---

# Course Final Score

## Overview

The **Final Vote** represents the overall score achieved by a user within a course. It is automatically calculated based on specific learning objects configured to contribute to the final evaluation.

---

## How the Final Vote is Calculated

The final score is computed by considering only the course elements explicitly marked as **"Use for final"** in the LO settings

Each of these elements contributes to the final vote according to:

- its **score**
- its **weight**
- its **maximum achievable score**

### Calculation Logic

The system applies a weighted normalization formula:

![](https://docs2.formalms.org/uploads/images/gallery/2026-04/embedded-image-oqovjmyi.png)

Final Vote = (Sum of (user score × weight)) / (Sum of (max score × weight)) × Final Score Scale

Where:

- **user score** = score obtained by the user in each activity
- **weight** = importance assigned to the activity
- **max score** = maximum achievable score for the activity
- **Final Score Scale** = maximum score configured for the course (e.g. 100, 200)

### Important Notes

- Only objects marked as **"Use for final"** are included
- Activities not completed (or not valid) contribute **0** to the numerator
- However, their weight is still included in the denominator
- This means incomplete activities negatively impact the final score

---

## Manage the Final Score (Forma 4.2 onward)

### Object Inclusion Rules

- **No object is included by default**
- All objects that produce a score (e.g. tests, SCORM, assignments) must be **explicitly marked as "Use for final"**
- This provides full control over which activities contribute to the final evaluation

**Upgrading to Forma 4.2**: when upgrading from a previous version to 4.2, the settings for existing materials in the gradebook (test, scorm or activities) will be mantained and migrated to each LO properties settings

---

### When the Final Vote is Calculated

- The final vote is **automatically updated in real time**
- Recalculation occurs **each time a user completes an object** marked as *"Use for final"*

##### Benefits of the new behavior

- Immediate feedback for learners
- Always up-to-date final scores
- No need to access the Gradebook to trigger recalculation

Check the [**Course Report Documentation**](books__reference-guide__page__course-report.md) for further details

## Manage the Final Score (Older Forma version)

### Object Inclusion Rules

- **Test objects** were automatically included in the final vote calculation
- It was still possible to exclude them by modifying the **"Use for final"** option in the Gradebook
- Other object types required explicit configuration depending on their setup

### When the Final Vote is Calculated

- The final vote is calculated **only when the Gradebook module is accessed**
- This means scores may not be immediately updated after completing an activity

Check the [**Gradebook Documentation**](books__reference-guide__page__gradebook.md) for further details

### Editing the final score

TBD

---

## Best Practices

- Assign weights carefully to reflect the importance of each activity
- Explicitly configure **"Use for final"** for all relevant objects
- Inform learners that incomplete activities will lower their final score
- Use the final score scale (e.g. 100 or 200) consistently across courses

Entrar em modo de seleção de seção
