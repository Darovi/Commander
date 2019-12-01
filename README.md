[![StyleCI](https://github.styleci.io/repos/225050142/shield?branch=master)](https://github.styleci.io/repos/225050142)


# Commander for Laravel


## Getting Started

To get started you need to install the package with Composer:

```bash
composer require laracademy/interactive-make
```

### Laravel >= 5.5

That's it! The package is auto-discovered on 5.5 and up!

### Laravel <= 5.4

Add the package service provider to your providers array in `config/app.php`

```php
'providers' => [
    // ...
    Darovi\Commander\CommanderServiceProvider::class,
],
```

### Create a new Repository class

To create a new repository class use the command

```bash
php artisan make:repository CLASSNAME
```
 
 
 Replace CLASSNAME with the name you want to provide your repository class.

## Disclaimer

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
