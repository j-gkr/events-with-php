import { Ticket } from 'src/ticket/ticket.entity';
import { IsNotEmpty } from 'class-validator';

/**
 * Data transfer object to create an event.
 */
export class CreateEventDto {
    
    eventId: string;
    
    @IsNotEmpty()
    eventTitle: string;

    @IsNotEmpty()
    eventDate: Date;

    @IsNotEmpty()
    eventCity: string;

    tickets: Ticket[];
}
