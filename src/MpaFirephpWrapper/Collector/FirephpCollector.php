<?php
/*
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace MpaFirephpWrapper\Collector;

use MpaFirephpWrapper\Service\FirephpWrapper;
use Zend\Mvc\MvcEvent;
use ZendDeveloperTools\Collector\CollectorInterface;

class FirephpCollector implements CollectorInterface
{
    const NAME     = 'mpa_firephp_wrapper_collector';
    const PRIORITY = 150;

    protected $firephp;
    protected $howManyLogged = 0;

    public function __construct(FirephpWrapper $firephp)
    {
        $this->firephp = $firephp;
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return static::NAME;
    }

    /**
     * {@inheritDoc}
     */
    public function getPriority()
    {
        return static::PRIORITY;
    }

    /**
     * {@inheritDoc}
     */
    public function collect(MvcEvent $mvcEvent)
    {
        if (!is_null($this->firephp->howManyLogged())) {
            $this->howManyLogged = $this->firephp->howManyLogged();
        }
    }

    /**
     * @return int
     */
    public function getHowManyLogged()
    {
        return $this->howManyLogged;
    }
}
