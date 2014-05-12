<?php
/*
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace MpaFirephpWrapper\View\Helper;

use MpaFirephpWrapper\Service\FirephpWrapper;
use Zend\View\Helper\AbstractHelper;

class FirephpHelper extends AbstractHelper
{
    protected $firephp;

    public function __construct(FirephpWrapper $firephp)
    {
        $this->firephp = $firephp;
    }

    /**
     * @param        $object
     * @param  string $type
     * @param  string $label
     * @param  array  $options
     * @return FirephpWrapper
     */
    public function __invoke($object, $type = 'info', $label = null, $options = [])
    {
        return $this->firephp->write($object, $type, $label, $options);
    }
}
