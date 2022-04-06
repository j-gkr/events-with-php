import { Ticket } from "src/ticket/ticket.entity";
import { v4 as uuid4 } from 'uuid';

export class CreateEventDto {
    eventId: string;
    readonly eventTitle: string;
    readonly eventDate: Date;
    readonly eventCity: string;
    readonly tickets: Ticket[];
}
