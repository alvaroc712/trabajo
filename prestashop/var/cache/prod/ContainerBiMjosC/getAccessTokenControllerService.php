<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository(), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCMLk4EG2Qukcj+'."\n".'W262WkxtND9VEjynAN/lJshMneMkDSIiSdatsiKM2a6rMonF/WbzpEwsyNHwW70D'."\n".'xYadU2hfyo62/+/EjW+mbkaqWN0FN7eNqZP0pr462ByUOU8wJ3NsaXrgJWQEHln0'."\n".'fq6L5jPEJdLWUuhspAc49cDBEWZHk1cvc80srnv/niTVxS9YeuZEulDzB9ml+obb'."\n".'iJAFpUd9iWjQSm258dDMeSPJDTcsw3ca8/RSwwqjws3wyCL3dVqmDufRlx3n/BsW'."\n".'RLXp8wZ0mvuFflQsm4nm0nLtaRfm/m0/FJfcyqMxYlN5SaCvX5TCk7694QZkxG6E'."\n".'2RrUMBW9AgMBAAECggEAFvXsrGqKJcCWQedbAn5W31o792S1z4rqoV+RVk9UKY8H'."\n".'JMOgaLHxS83J+NudynK/nq+uFHXOQUbddlUvv+wt/+avKpVQQgsCmymb5IIKrbSb'."\n".'GZaJl/yJ0xybzcF3UYVcuAis6jLlp3ELPetUDrElkH67goRw8n6JelBygo0lihp/'."\n".'iGiMaAhHT9ELrRr37Uckl3hU4NCkMvjZzDzQpt4eHweDmmANBK3n4HE3TxboAPUL'."\n".'pdhn/C01+vGGji18IxISJp/dslr1d+ibhDOgQd15CFQoRtLTE6cI2dGI0A7AyOn7'."\n".'78dDeY/Eg0aahfmFaDdLv2DVg1CVfEy3K7Yh1OWGlwKBgQDEJa8sgG7rLHoteVsB'."\n".'v9+Rwt5vT7xP7Tfh+Y33NJMAL8PHph4jLdehf/cUsLXKsj22XRYav5IjRWspUgKi'."\n".'7mLGpc6Ym+VGie/+mP7ZlB4KDVVCu5ZFcc90Oxkek5VghEgjhGFW0ZF5pzUAzmvr'."\n".'f3gfklJrZzmbA0lCoZPr1PBOuwKBgQC29Ltd8XnCZzfeLG2u3DQFr5Dq8niZXQ/x'."\n".'KNdvaV9VMSOKiQm8zJcKmZJdgEqROGC/6+ePaqTpCMMv6dtlt6xY0REeKQ0mGxde'."\n".'lu4oziEi2gaqEBPqwUgDMRxF66Jaoqq5oaF+MfWJ3LafYrxVt3D65uhcpdD0ww1E'."\n".'Xq2dS4Hx5wKBgCD53Ot0ZDFxdtDyWBSBN4r/4fmAxD4DuaNqGy32Tsh3P0jvap2r'."\n".'dVcXdmiqFMYRFUL1f2Pb1SvM3elCemL+BOk0svkBLJihVBHPkvjtZ+d0umLPusHO'."\n".'EnyN+vkjArgJRT+DYAIClZyIOeb6zTX4Zi+Yn/aikhK3iLeFBqNdV1FFAoGBAI7o'."\n".'69Kd5PYtmj45hhOofhpS4Wgkrn9dai5+MIoeTRFGqPR1xt1rEjB9dQ8EPzrgRvKj'."\n".'WuVz8Az3gz/R9EaoCj/2TuC4QEUbtE12p+HH4apPlBUTKfudrpqPqf4T6WXS2njW'."\n".'AEeKzrk5Zo1pmqN5/w59f9Oe0nHeSma1bfgIGyDRAoGAW1gzjZaNw2wqguG9097A'."\n".'seHHurSc1kaCvX9vJxPtnuFyhZQgrJsh87YdY6fQqnc5uvQq9lOp8jMSm/5nDmPD'."\n".'1N7m1qur2FgREBd1qbIw22D+6YsdWSwMIRfe3JljDwxfBdnqWyJSgY1yCRnRH4Kt'."\n".'G0P7KDut/IzGVe7aD9yv2LQ='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def00000848c9e8e482f6b442af8693e75955033a26980bb595de7146345ba925d8bc33ada16ade7984a8869bd35babdfa786fe2e66bde772c1370e3c3aaa66a28deab83');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());
$b = new \Nyholm\Psr7\Factory\Psr17Factory();

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($b, $b, $b, $b), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), $b);