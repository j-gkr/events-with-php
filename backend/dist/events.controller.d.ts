import { AppService } from './app.service';
export declare class EventsController {
    private readonly appService;
    constructor(appService: AppService);
    findAll(): string;
    create(): string;
}
