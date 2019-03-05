<?php

/**
 * Copyright 2019 Amin Yazdanpanah<http://www.aminyazdanpanah.com>.
 *
 * Licensed under the MIT License;
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://opensource.org/licenses/MIT
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


namespace Shaka\Media;


use Shaka\Options\DASH;
use Shaka\Options\DRM\Encryption;
use Shaka\Options\HLS;

interface MediaInterface
{
    /**
     * @param DASH $dash
     * @return $this
     */
    public function DASH(DASH $dash);

    /**
     * @param HLS $hls
     * @return $this
     */
    public function HLS(HLS $hls);

    /**
     * @param Encryption $drm
     * @return Media
     */
    public function DRM(Encryption $drm);
}