<?php
/*
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace MpaFirephpWrapper\Options;

use Zend\Stdlib\AbstractOptions;

class FirephpWrapperOptions extends AbstractOptions
{
    protected $maxObjectDepth;
    protected $maxArrayDepth;
    protected $maxDepth;
    protected $useNativeJsonEncode;
    protected $includeLineNumbers;

    /**
     * @param  bool $includeLineNumbers
     * @return self
     */
    public function setIncludeLineNumbers($includeLineNumbers)
    {
        $this->includeLineNumbers = $includeLineNumbers;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIncludeLineNumbers()
    {
        return $this->includeLineNumbers;
    }

    /**
     * @param  int $maxArrayDepth
     * @return self
     */
    public function setMaxArrayDepth($maxArrayDepth)
    {
        $this->maxArrayDepth = $maxArrayDepth;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxArrayDepth()
    {
        return $this->maxArrayDepth;
    }

    /**
     * @param  int $maxDepth
     * @return self
     */
    public function setMaxDepth($maxDepth)
    {
        $this->maxDepth = $maxDepth;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxDepth()
    {
        return $this->maxDepth;
    }

    /**
     * @param  int $maxObjectDepth
     * @return self
     */
    public function setMaxObjectDepth($maxObjectDepth)
    {
        $this->maxObjectDepth = $maxObjectDepth;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxObjectDepth()
    {
        return $this->maxObjectDepth;
    }

    /**
     * @param  bool $useNativeJsonEncode
     * @return self
     */
    public function setUseNativeJsonEncode($useNativeJsonEncode)
    {
        $this->useNativeJsonEncode = $useNativeJsonEncode;

        return $this;
    }

    /**
     * @return bool
     */
    public function getUseNativeJsonEncode()
    {
        return $this->useNativeJsonEncode;
    }
}
