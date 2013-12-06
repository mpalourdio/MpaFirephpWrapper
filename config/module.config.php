<?php
/*
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

return array(
    'service_manager'    => array(
        'factories' => array(
            'firephp'                                      => 'MpaFirephpWrapper\Service\FirephpFactory',
            'MpaFirephpWrapper\Collector\FirephpCollector' => 'MpaFirephpWrapper\Service\FirephpCollectorServiceFactory',
        )
    ),
    'controller_plugins' => array(
        'invokables' => array(
            'firephp' => 'MpaFirephpWrapper\Controller\Plugin\FirephpPlugin',
        )
    ),
    'view_helpers'       => array(
        'invokables' => array(
            'firephp' => 'MpaFirephpWrapper\View\Helper\FirephpHelper',
        )
    ),
    'view_manager'       => array(
        'template_map' => array(
            'zend-developer-tools/toolbar/mpa-firephp-wrapper' => __DIR__ . '/../view/zend-developer-tools/toolbar/mpa-firephp-wrapper.phtml',
        ),
    ),
    'zenddevelopertools' => array(
        'profiler' => array(
            'collectors' => array(
                'mpa_firephp_wrapper_collector' => 'MpaFirephpWrapper\Collector\FirephpCollector',
            ),
        ),
        'toolbar'  => array(
            'entries' => array(
                'mpa_firephp_wrapper_collector' => 'zend-developer-tools/toolbar/mpa-firephp-wrapper',
            ),
        ),
    ),
);
