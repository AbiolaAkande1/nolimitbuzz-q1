# Nolimibuzz Q1 WordPress Theme

A custom WordPress theme featuring a modern blog layout and team members showcase.

## Theme Features

### Blog Display (Question 1)
- Responsive blog post grid on homepage
- Single post template with featured images
- Author information display
- CSS styling with custom properties

### Team Members (Question 3)
- Custom post type: Team Member
- ACF fields
- Team member grid display page
- LinkedIn profile integration

## Installation

1. Upload the theme folder to `/wp-content/themes/`
2. Install required plugins:
   - Advanced Custom Fields
3. Activate the theme through WordPress admin
4. Import ACF fields from `acf-json` directory

## Theme Structure

```
nolimibuzz-q1/
├── acf-json/
├── assets/
│   ├── images/
│   └── js/
├── inc/
├── template-parts/
└── languages/
```

## Team Members Setup

1. Create a new page
2. Select "Team Page" template
3. Add team members through WordPress admin
4. Fill in required ACF fields:
   - Position
   - LinkedIn Profile
   - Profile Picture

## Credit

Built by: Abiola Akande
Version: 1.0.0
Requires WordPress: 5.0 or higher