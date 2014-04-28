<?php
/*
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 * FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 * COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 * IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 * CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

return [
    'service_manager'    => [
        'factories' => [
            'firephp' => 'MpaFirephpWrapper\Service\FirephpFactory',
            'MpaFirephpWrapper\Collector\FirephpCollector'
                      => 'MpaFirephpWrapper\Service\FirephpCollectorServiceFactory',
        ]
    ],
    'controller_plugins' => [
        'invokables' => [
            'firephp' => 'MpaFirephpWrapper\Controller\Plugin\FirephpPlugin',
        ]
    ],
    'view_helpers'       => [
        'invokables' => [
            'firephp' => 'MpaFirephpWrapper\View\Helper\FirephpHelper',
        ]
    ],
    'view_manager'       => [
        'template_map' => [
            'zend-developer-tools/toolbar/mpa-firephp-wrapper'
                => __DIR__ . '/../view/zend-developer-tools/toolbar/mpa-firephp-wrapper.phtml',
        ],
    ],
    'zenddevelopertools' => [
        'profiler' => [
            'collectors' => [
                'mpa_firephp_wrapper_collector' => 'MpaFirephpWrapper\Collector\FirephpCollector',
            ],
        ],
        'toolbar'  => [
            'entries' => [
                'mpa_firephp_wrapper_collector' => 'zend-developer-tools/toolbar/mpa-firephp-wrapper',
            ],
        ],
    ],
];
