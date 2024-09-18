# Editable Article Hits - Joomla! System Plugin

**Editable Article Hits** is a Joomla plugin that allows the hits (view count) field in articles to be editable directly from the article edit screen. By default, Joomla makes the hits field read-only, but this plugin empowers administrators, editors, and other authorized users to modify the hits count for any article.

![Editable Article Hits Joomla Demo](<https://scrnst.web357.com/Editable%20Article%20Hits%20Joomla%20Plugin%20(demo).png>)

## Features

-   **Editable Hits Field**: Modify the hits (views) count of any article directly from the Joomla article editor.
-   **Exclude User Groups**: Choose which user groups should be excluded from editing the hits field.
-   **Exclude Categories**: Select specific article categories where the hits field should remain non-editable.
-   **Flexible Configuration**: If no user groups or categories are excluded, the plugin will allow editing the hits field for all.

This plugin is perfect for content-driven websites that need precise control over article statistics or require manual adjustment of view counts.

## Requirements

-   Joomla! 4.x and 5.x
-   PHP 7.4 or later

## Installation

1. **Download the Plugin**: Download the latest version of the plugin as a `.zip` file.
2. **Install via Joomla Extension Manager**:
    - Log in to your Joomla Administrator panel.
    - Navigate to **Extensions** > **Manage** > **Install**.
    - Click **Upload Package File**, and upload the `.zip` file you downloaded.
    - After installation, navigate to **Extensions** > **Plugins** and search for "Editable Article Hits".
3. **Activate the Plugin**: Enable the plugin by clicking the status icon or by selecting it and clicking **Enable** in the toolbar.
4. **Configure the Plugin**:
    - Navigate to **Extensions** > **Plugins** and search for "Editable Article Hits".
    - Open the plugin to configure the settings.
    - Set exclusions for user groups and article categories where hits editing should be restricted.
    - Save the configuration.

## Configuration Options

### Exclude User Groups

In the plugin settings, you can select specific user groups that should **not** be allowed to edit the hits field. If no user groups are selected, the hits field will be editable for all user groups.

### Exclude Categories

Similarly, you can exclude certain article categories where the hits field will remain non-editable. If no categories are selected, the hits field will be editable for all categories.

![Editable Article Hits Joomla Plugin Parameters](<https://scrnst.web357.com/Editable%20Article%20Hits%20Joomla%20Plugin%20(params).png>)

## Usage

Once the plugin is installed and configured:

-   Users who are **not** in the excluded user groups and **not** editing articles in excluded categories will see the hits field as editable when they access the article editor.
-   The hits field can be adjusted as needed and saved with the article.

## Changelog

### v1.0.0

-   Initial release with editable hits field and exclusion options for user groups and categories.

## License

This plugin is licensed under the GNU General Public License version 3 or later. See the LICENSE file for details.

---

Created by **Yiannis Christodoulou** (Web357).  
Visit [https://www.web357.com](https://www.web357.com) for more Joomla! extensions.
