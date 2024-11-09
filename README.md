# Magento Frontend Assignment: Figma to Responsive Custom Theme

This project involves converting a Figma design into a fully responsive Magento frontend theme for both mobile and desktop views. The custom theme, located in `app/design/Magento/MyCompany`, inherits from the parent theme to streamline and centralize design updates. Additionally, a module (`app/code/Magento/MyCompany`) is included to create and manage static blocks displayed on the product detail page.

## Installation and Setup

### Step 1: Upload Theme and Module

1. Place the custom theme `Magento/MyCompany` in the following directory:
app/design/Magento/
2. Place the custom module `Magento/MyCompany` in the following directory:
app/code/Magento/

### Step 2: Enable the Module

Run the following commands in your terminal:

```bash
bin/magento module:enable Magento_MyCompany
bin/magento setup:upgrade
bin/magento setup:static-content:deploy -f
bin/magento cache:clean
```

### Step 3: Activate the Custom Theme in Admin
1. In the Magento Admin Panel, navigate to:Content > Design > Configuration
2. Edit the Default Store View
3. Set the Applied Theme to: Magento/MyCompany

The custom theme and static blocks should now be visible on the frontend.


