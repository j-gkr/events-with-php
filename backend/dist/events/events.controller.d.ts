import { EventsService } from './events.service';
export declare class EventsController {
    private readonly itemService;
    constructor(itemService: EventsService);
    findAll(): string;
    create(): string;
}
