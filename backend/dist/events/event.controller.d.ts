import { CreateEventDto } from './dto/create-event.dto';
import { EventService } from './event.service';
import { Event } from './event.entity';
export declare class EventController {
    private readonly eventService;
    constructor(eventService: EventService);
    findAll(): Promise<Event[]>;
    create(createEventDto: CreateEventDto): Promise<Event>;
}
