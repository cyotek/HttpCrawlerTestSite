# Change Log

### 1.25.1

#### Added

* Added help links to JavaScript\DOM Modification demonstration

#### Fixed

* JavaScript\DOM Modification demonstration was showing wrong sidebar links

### 1.25.0

#### Added

* Added JavaScript\DOM Modification demonstration
* Added Features\Paths demonstration

#### Fixed

* Removed multiple invalid `</div>` tags from template

### 1.24.1

#### Fixed

* Added link to Features\Downloads demonstration

#### Changed

* The Features\Downloads demonstration will now allow custom file sizes
  above 10MB to be returned as the `Content-Length` but will not send
  that volume of data
* The Features\Downloads demonstration no longer returns more than 1MB
  of content

### 1.24.0

#### Added

* Added Features\Downloads demonstration

### 1.23.0

#### Added

* Added Features\Certificates demonstration

### 1.22.2

#### Fixed

* Cookies set paths for all cookies
* Domain cookies didn't work if a custom port was used

### 1.22.1

#### Added

* Cookies demonstrating wasn't using unique values for all cookies

### 1.22.0

#### Added

* Added Features\Cookies demonstration
* Added Features\Authentication demonstration using multiple forms

#### Fixed

* `printArray` now writes "None" if the source array has no items

### 1.21.0

#### Added

* Added Features\Request Headers demonstration

### 1.20.0

#### Added

* Added Methods\Head demonstration

#### Changed

* The (unlinked) index for HTTP Methods did a redirect back to the home page. It
  now displays a normal index page with links to available HTTP Method demonstrations.

### 1.19.0

#### Added

* Added Features\Authentication demonstration

#### Fixed

* Added `text-decoration-skip-ink` to undo Google's roughshod "we know what's
  best for you"

### 1.18.0

#### Added

* Added Custom Action demo to HTML\Elements\Form
* Added Multiple demo to HTML\Elements\Form

#### Fixed

* Fully qualified URL's should now use the correct protocol when HTTPS is enabled

### 1.17.1

#### Added

* The hidden `input` element on the basic HTML\Elements\Form demo wasn't quoting
  the `value` attribute

### 1.17.0

#### Added

* Added Elements demo to HTML\Elements\Form

### 1.16.1

#### Added

* HTML\Attributes\Custom to include additional demo and more information

### 1.16.0

#### Added

* Added HTML\Elements\Meta content type demo

#### Fixed

* Fixed WebCopy documentation links

### 1.15.0

#### Added

* Added JavaScript\URI Transformation demo

#### Fixed

* WebCopy help links now point to the new documentation

### 1.14.0

#### Added

* Added HTML\Elements\Frameset demo

### 1.13.0

#### Added

* Added HTML\Elements\Form demo based on the hidden Methods\Post test

### 1.12.0

#### Added

* Added spaces in URL's demonstration

### 1.11.0

#### Added

* Added mime type feature demo reinstating a sample PDF for meta data extraction

### 1.10.0

#### Added

* Added `picture` element demo

### 1.9.0

#### Added

* Added Subdomains feature demo

#### Removed

* Removed the Features\Stylesheets demo as this is covered by the HTML\Link
  and CSS\url() demonstrations

### 1.8.0

#### Added

* Added data URI demo

### 1.7.0

#### Added

* Added change log
* Added a test for the `style` tag
* Added a test for the CSS `@import` declaration

### 1.6.0

#### Added

* Added a test for the `srcset` attribute

### 1.5.1

#### Changed

* Extended custom attributes demo

### 1.5.0

#### Added

* Added a test for the `300` status
* Added a test for URL's stored in custom attributes

#### Fixed

* The wrong descriptions were displayed for the `300` and `301` status test pages

### 1.4.0

#### Added

* Added a test for canonical URL's

### 1.3.0

#### Added

* Added links to the source code, readme, and the live demo URL

### 1.2.2

#### Fixed

* Fixed additional white space issues affecting Linux hosting

### 1.2.1

#### Added

* Updated footer with feedback link

### 1.2.0

#### Added

* Added a test for the `base` tag

#### Fixed

* The `302` status test was issuing a `301`

### 1.1.0

#### Added

* Add page for testing HTTP `post` methods

#### Fixed

* Now works properly on Linux
* Removed double titles on 3xx redirect destinations

### 1.0.0

* Initial commit