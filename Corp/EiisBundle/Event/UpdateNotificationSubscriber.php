<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2018-04-26
 * Time: 17:34
 */

namespace Corp\EiisBundle\Event;

use Corp\EiisBundle\Entity\EiisUpdateNotification;
use Corp\EiisBundle\Traits\ContainerUsageTrait;

class UpdateNotificationSubscriber
{
    use ContainerUsageTrait;

    public function onEiisNotificationUpdate(UpdateNotificationEvent $event){
        $obj = $this->getEm()->getRepository(EiisUpdateNotification::class)->findOneBy(['signalFrom'=>$event->getSignalSource(),'systemObjectCode'=>$event->getSystemObjectCode()]) ?? (new EiisUpdateNotification());
        $obj
            ->setSystemObjectCode($event->getSystemObjectCode())
            ->setSignalFrom($event->getSignalSource());
        $this->getEm()->persist($obj);
        $this->getEm()->flush($obj);
    }
}
