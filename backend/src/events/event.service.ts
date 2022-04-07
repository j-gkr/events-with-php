import { Injectable } from '@nestjs/common';
import { Event } from './event.entity';

@Injectable()
export class EventService {
  private readonly events: Event[] = [
    { 
      eventId: 'a0914679-03b5-44e9-ba9f-5e38b3331151',  
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