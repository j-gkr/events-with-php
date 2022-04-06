import { Event } from './event.entity';
export declare class EventService {
    private readonly events;
    create(event: Event): Event;
    findAll(): Event[];
}
