import { Injectable } from '@nestjs/common';
import { Event } from './event.entity';
import { v4 as uuid4 } from 'uuid';

@Injectable()
export class EventService {
  private readonly events: Event[] = [
    { 
      eventId: uuid4(),  
      eventTitle: 'Bootshaus', 
      eventDate: new Date(), 
      eventCity: 'Cologne', 
      tickets: [
        { barcode: '1', firstName: 'John', lastName: 'Doe' },
        { barcode: '2', firstName: 'Jane', lastName: 'Doe' },
      ] 
    }
  ];

  create(event: Event): Event {
    this.events.push(event);
    return event;
  }

  findAll(): Event[] {
    return this.events;
  }
}